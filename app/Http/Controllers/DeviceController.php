<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device; // Assuming you have a Device model

class DeviceController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'device_token' => 'required|string',
            'user_id' => 'required|integer',
            'device_type' => 'required|string', // e.g., 'android', 'ios'
        ]);

        // Check if the device is already registered
        $device = Device::where('device_token', $validatedData['device_token'])->first();

        if (!$device) {
            $device = new Device();
        }

        // Update or create device record
        $device->fill($validatedData);
        $device->save();

        return response()->json(['message' => 'Device registered successfully']);
    }
}

