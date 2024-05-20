<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Service;
use App\Models\Addon;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array',
            'services' => 'sometimes|array',
            'addons' => 'sometimes|array',
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after:start_datetime',
            'address_id' => 'required|exists:addresses,id',
        ]);

        $totalPrice = $this->calculateTotalPrice($validatedData, $validatedData['start_datetime'], $validatedData['end_datetime']);

        $booking = new Booking($validatedData);
        $booking->price = $totalPrice;
        $booking->save();

        // Attach relationships as necessary
        $booking->products()->attach($this->parseItems($validatedData['products']));
        if (isset($validatedData['services'])) {
            $booking->services()->attach($this->parseItems($validatedData['services']));
        }
        if (isset($validatedData['addons'])) {
            $booking->addons()->attach($this->parseItems($validatedData['addons']));
        }

        return response()->json(['message' => 'Booking created successfully', 'booking' => $booking], 201);
    }

    private function calculateTotalPrice($items, $startDatetime, $endDatetime)
    {
        $start = Carbon::parse($startDatetime);
        $end = Carbon::parse($endDatetime);
        $days = $end->diffInDays($start) + 1;
        $totalPrice = 0;

        // Calculate for products
        foreach ($items['products'] as $product) {
            $productModel = Product::find($product['id']);
            $totalPrice += $productModel->price_per_day * $product['quantity'] * $days;
        }

        // Add calculations for services and addons if applicable
        // Example for services (adjust based on your pricing model)
        if (isset($items['services'])) {
            foreach ($items['services'] as $service) {
                $serviceModel = Service::find($service['id']);
                // Assuming a flat rate for services
                $totalPrice += $serviceModel->price * $service['quantity']; 
            }
        }

        // Example for addons (adjust based on your pricing model)
        if (isset($items['addons'])) {
            foreach ($items['addons'] as $addon) {
                $addonModel = Addon::find($addon['id']);
                // Assuming addons' price is per day
                $totalPrice += $addonModel->price * $addon['quantity'] * $days;
            }
        }

        return $totalPrice;
    }

    // Helper to parse items for attaching to the pivot table
    private function parseItems($items)
    {
        return collect($items)->mapWithKeys(function ($item) {
            return [$item['id'] => ['quantity' => $item['quantity']]];
        })->toArray();
    }

    // Listing all bookings
    public function index()
    {
        $bookings = Booking::with(['user', 'products', 'services', 'addons'])->get();
        return response()->json(['bookings' => $bookings]);
    }

    // Displaying a specific booking
    public function show(Booking $booking)
    {
        return response()->json($booking->load(['user', 'products', 'services', 'addons']));
    }

    // Updating a booking
    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            // Include validation rules for updated booking data
            'products' => 'sometimes|array',
            'services' => 'sometimes|array',
            'addons' => 'sometimes|array',
            'start_datetime' => 'sometimes|date',
            'end_datetime' => 'sometimes|date|after:start_datetime',
        ]);
    
        // Recalculate total price if necessary
        if (array_key_exists('start_datetime', $validatedData) || array_key_exists('end_datetime', $validatedData) || isset($validatedData['products']) || isset($validatedData['services']) || isset($validatedData['addons'])) {
            $totalPrice = $this->calculateTotalPrice($validatedData, $validatedData['start_datetime'] ?? $booking->start_datetime, $validatedData['end_datetime'] ?? $booking->end_datetime);
            $validatedData['price'] = $totalPrice;
        }
    
        // Update the booking with new data
        $booking->update($validatedData);
    
        // Update relationships if necessary
        if (isset($validatedData['products'])) {
            $booking->products()->sync($this->parseItems($validatedData['products']));
        }
        if (isset($validatedData['services'])) {
            $booking->services()->sync($this->parseItems($validatedData['services']));
        }
        if (isset($validatedData['addons'])) {
            $booking->addons()->sync($this->parseItems($validatedData['addons']));
        }
    
        return response()->json(['message' => 'Booking updated successfully', 'booking' => $booking->load(['products', 'services', 'addons'])]);
    }

    // Deleting a booking
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json(['message' => 'Booking deleted successfully']);
    }

    public function userBookings(Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['message' => 'Not authenticated'], 401);
        }

        $bookings = Booking::where('user_id', $user->id)->with(['products', 'services', 'addons'])->get();

        return response()->json($bookings);
    }

}
