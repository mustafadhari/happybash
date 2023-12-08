<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DeviceController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'DeviceType' => 'required|integer',
            'UniqueDeviceId' => 'required|string',
            'NotificationToken' => 'required|string',
            'ClientKey' => 'required|string',
        ]);

        // Verify the ClientKey here
        $client_key = env('CLIENT_KEY');
        $receivedKey = (string) trim($request->input('ClientKey'));
        if ($receivedKey !== $client_key) {
            return response()->json(['Message' => 'Unauthorized', 'Status' => 1], 401);
        }

        Device::updateOrCreate(
            ['unique_device_id' => $validated['UniqueDeviceId']],
            [
                'device_type' => $validated['DeviceType'],
                'notification_token' => $validated['NotificationToken'],
            ]
        );

        return response()->json(['Message' => 'Success', 'Status' => 0]);
    }
}
