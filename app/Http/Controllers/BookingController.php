<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', ['bookings' => $bookings]);
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'service_id' => 'required|exists:services,id',
            'addon_id' => 'required|exists:addons,id',
            'date' => 'required|date',
            // Add other fields as necessary
        ]);

        $booking = Booking::create($request->validated());
        return redirect()->route('bookings.index');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', ['booking' => $booking]);
    }

    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'service_id' => 'required|exists:services,id',
            'addon_id' => 'required|exists:addons,id',
            'date' => 'required|date',
            // Add other fields as necessary
        ]);

        $booking->update($request->validated());
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}