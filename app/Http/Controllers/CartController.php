<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    // Add item to cart with rental period consideration
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'start_time' => 'required|date_format:H:i', // Validate time format (24-hour format)
            'end_time' => 'required|date_format:H:i|after:start_time'
        ]);

        if (!$this->checkProductAvailabilityForRental($validated['product_id'], $validated['quantity'], $validated['start_date'], $validated['end_date'], $validated['start_time'], $validated['end_time'])) {
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Product not available for the selected dates'], 422);
            } else {
                return back()->withErrors(['error' => 'Product not available for the selected dates']);
            }
        }

        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $cartItem = $cart->cartItems()->updateOrCreate(
            ['product_id' => $validated['product_id']],
            [
                'quantity' => $validated['quantity'],
                'start_date' => $validated['start_date'],
                'end_date' => $validated['end_date'],
                'start_time' => $validated['start_time'], // Save start time
                'end_time' => $validated['end_time'] // Save end time
            ]
        );

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItem]);
        } else {
            return redirect()->route('cart.show');
        }
    }

    private function checkProductAvailabilityForRental($productId, $quantity, $startDate, $endDate, $startTime, $endTime)
    {
        $startDateTime = $startDate . ' ' . $startTime;
        $endDateTime = $endDate . ' ' . $endTime;

        $bookedItems = Booking::whereHas('products', function ($query) use ($productId) {
            $query->where('products.id', $productId);
        })->where(function ($query) use ($startDateTime, $endDateTime) {
            $query->where(function ($q) use ($startDateTime, $endDateTime) {
                $q->where('start_datetime', '<=', $startDateTime)
                ->where('end_datetime', '>=', $endDateTime);
            })->orWhere(function ($q) use ($startDateTime, $endDateTime) {
                $q->whereBetween('start_datetime', [$startDateTime, $endDateTime])
                ->orWhereBetween('end_datetime', [$startDateTime, $endDateTime]);
            })->orWhere(function ($q) use ($startDateTime, $endDateTime) {
                $q->where('start_datetime', '<', $startDateTime)
                ->where('end_datetime', '>', $endDateTime);
            });
        })->count();

        return $bookedItems < $quantity;
    }

    public function updateCartItem(Request $request, CartItem $cartItem)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'start_time' => 'required|date_format:H:i', // Validate time format (24-hour format)
            'end_time' => 'required|date_format:H:i|after:start_time' // Ensure end time is after start time
        ]);

        if (!$this->checkProductAvailabilityForRental(
            $cartItem->product_id, 
            $validated['quantity'], 
            $validated['start_date'], 
            $validated['end_date'],
            $validated['start_time'], // Include start time in availability check
            $validated['end_time']   // Include end time in availability check
        )) {
            return response()->json(['message' => 'Product not available for the selected dates and times'], 422);
        }

        $cartItem->update([
            'quantity' => $validated['quantity'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time']
        ]);
        return response()->json(['message' => 'Cart item updated successfully']);
    }

    public function removeCartItem(CartItem $cartItem)
    {
        $cartItem->delete();
        return response()->json(['message' => 'Item removed from cart']);
    }

    public function viewCart(Request $request)
    {
        $cart = Cart::with(['cartItems.product.images' => function ($query) {
            $query->take(1); // Retrieve only the first image
        }])->where('user_id', Auth::id())->firstOrFail();

        // Loop through each cart item and load the first image for each product
        $cart->cartItems->each(function ($cartItem) {
            $cartItem->product->load(['images' => function ($query) {
                $query->take(1); // Retrieve only the first image
            }]);
        });

        if ($request->wantsJson()) {
            return response()->json(['cart' => $cart]);
        } else {
            return view('shop-cart', ['cart' => $cart]);
        }
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart is empty'], 404);
        }

        $startDate = $cart->cartItems->min('start_date');
        $endDate = $cart->cartItems->max('end_date');

        // Validate the request to ensure the address_id is provided
        $validated = $request->validate([
            'address_id' => 'required|exists:addresses,id',
        ]);

        // Initialize a variable to store the total price of the booking
        $totalPrice = 0;

        // Check availability for all cart items
        foreach ($cart->cartItems as $item) {
            $startDate = $item->start_date;
            $endDate = $item->end_date;
            $startTime = $item->start_time; // Assuming start_time and end_time are stored in the cart items
            $endTime = $item->end_time;
    
            if (!$this->checkProductAvailabilityForRental(
                $item->product_id, 
                $item->quantity, 
                $startDate, 
                $endDate,
                $startTime, // Include start time in the check
                $endTime   // Include end time in the check
            )) {
                return response()->json(['message' => "Product ID {$item->product_id} is not available for the selected dates and times"], 422);
            }
        }

        // Create booking
        $booking = new Booking([
            'user_id' => $user->id,
            'address_id' => $validated['address_id'],
            'start_datetime' => $startDate . ' ' . $cart->cartItems->min('start_time'),
            'end_datetime' => $endDate . ' ' . $cart->cartItems->max('end_time'),
            'status' => 'confirmed',
            'price' => $totalPrice,
        ]);
        $booking->save();

        // Associate products with the booking
        foreach ($cart->cartItems as $item) {
            $booking->products()->attach($item->product_id, ['quantity' => $item->quantity]);
            $product = Product::find($item->product_id);
            $product->available_quantity -= $item->quantity; // Decrement the product's available quantity
            $product->save();
        }

        // Clear the cart
        $cart->cartItems()->delete();
        $cart->delete();

        return response()->json(['message' => 'Checkout successful', 'booking' => $booking]);
    }

}

