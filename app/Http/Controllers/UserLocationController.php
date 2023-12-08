<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLocationController extends Controller
{
    // Set or update the user's current location
    public function update(Request $request)
    {
        $validated = $request->validate([
            'location_id' => 'required|exists:locations,id',
        ]);

        $user = Auth::user();
        $user->location_id = $validated['location_id'];
        $user->save();

        return response()->json(['message' => 'User location updated successfully']);
    }

    // Get the user's current location
    public function show()
    {
        $user = Auth::user();
        $location = $user->location; // Assuming you have a 'location' relation defined on the User model

        return response()->json($location);
    }
}

