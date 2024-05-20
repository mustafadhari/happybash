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
        ]);

        if (!$this->checkProductAvailabilityForRental($validated['product_id'], $validated['quantity'], $validated['start_date'], $validated['end_date'])) {
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Product not available for the selected dates'], 422);
            } else {
                return back()->withErrors(['error' => 'Product not available for the selected dates']);
            }
        }

        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $cartItem = $cart->cartItems()->updateOrCreate(
            ['product_id' => $validated['product_id']],
            ['quantity' => $validated['quantity'], 'start_date' => $validated['start_date'], 'end_date' => $validated['end_date']]
        );

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItem]);
        } else {
            return redirect()->route('cart.show');
        }
    }

    private function checkProductAvailabilityForRental($productId, $quantity, $startDate, $endDate)
    {
        $bookedItems = Booking::whereHas('products', function ($query) use ($productId) {
            $query->where('products.id', $productId);
        })->where(function ($query) use ($startDate, $endDate) {
            $query->whereBetween('start_datetime', [$startDate, $endDate])
                ->orWhereBetween('end_datetime', [$startDate, $endDate])
                ->orWhere(function ($query) use ($startDate, $endDate) {
                    $query->where('start_datetime', '<', $startDate)
                            ->where('end_datetime', '>', $endDate);
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
        ]);

        if (!$this->checkProductAvailabilityForRental($cartItem->product_id, $validated['quantity'], $validated['start_date'], $validated['end_date'])) {
            return response()->json(['message' => 'Product not available for the selected dates'], 422);
        }

        $cartItem->update($validated);
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

        // Initialize a variable to store the total price of the booking
        $totalPrice = 0;

        // Check availability for all cart items
        foreach ($cart->cartItems as $item) {
            if (!$this->checkProductAvailabilityForRental($item->product_id, $item->quantity, $startDate, $endDate)) {
                return response()->json(['message' => "Product ID {$item->product_id} is not available for the selected dates"], 422);
            }

            // Calculate total price based on the product's rental price, quantity, and number of days
            $days = Carbon::parse($startDate)->diffInDays(Carbon::parse($endDate)) + 1;
            $totalPrice += $item->product->price_per_day * $item->quantity * $days;
        }

        // Create booking
        $booking = new Booking([
            'user_id' => $user->id,
            'start_datetime' => $startDate,
            'end_datetime' => $endDate,
            'status' => 'confirmed', // Assuming you have a status field to track booking status
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

