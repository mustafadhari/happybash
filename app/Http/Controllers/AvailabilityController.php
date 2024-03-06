<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Booking;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function checkAvailability(Request $request, $productId)
    {
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Assuming you have a method in the Product model to check availability
        $isAvailable = Product::findOrFail($productId)->isAvailableForDates(
            $request->start_date,
            $request->end_date
        );

        return response()->json(['available' => $isAvailable]);
    }
}
