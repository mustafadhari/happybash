<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Retrieve all locations
    public function index()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    // Retrieve a specific location
    public function show(Location $location)
    {
        return response()->json($location);
    }

    // Store a new location (if needed)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // Add 'latitude' and 'longitude' validation if necessary
        ]);

        $location = Location::create($validated);
        return response()->json($location, 201);
    }

    // Update an existing location (if needed)
    public function update(Request $request, Location $location)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // Add 'latitude' and 'longitude' validation if necessary
        ]);

        $location->update($validated);
        return response()->json($location);
    }

    // Delete a location (if needed and with caution)
    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(['message' => 'Location deleted successfully']);
    }
}

