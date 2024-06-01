<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('account.index', ['account' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create($request->validated());
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:8',
        ]);

        $user->update($request->validated());
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function profile(Request $request)
    {
        $user = $request->user(); // Get the authenticated user
        $user = collect($user)->map(function ($value, $key) {
            if ($key === 'name') {
                return $value === null ? '' : $value;
            } elseif ($key === 'location_id') {
                return $value === null ? null : (int)$value;
            } else {
                return $value;
            }
        })->all();
        return response()->json($user);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user(); // Get the authenticated user

        // Validate the input
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|min:8',
        ]);

        // Check if a new password was provided and hash it
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        // Update the user's profile
        $user->update($validatedData);

        return response()->json(['message' => 'Profile updated successfully', 'user' => $user]);
    }

    public function showAccount()
    {
        dd('Route is hitting here');
        $user = auth()->user();
        dd($user);
        return view('account', compact('user'));
    }

    public function requestOtpForMobileChange(Request $request)
    {
        $user = auth()->user();
        $validatedData = $request->validate([
            'country_code' => 'required',
            'new_mobile' => 'required|unique:users,phone,' . $user->id,
        ]);

        $fullMobileNumber = $validatedData['country_code'] . $validatedData['new_mobile'];
        $otp = rand(1000, 9999); // Generate OTP
        $this->sendTwilioOTP($fullMobileNumber, $otp);

        session(['otp' => $otp, 'phone' => $fullMobileNumber]); // Store OTP and mobile in session
        return response()->json(['message' => 'OTP sent successfully']);
    }

    protected function sendTwilioOTP($mobile, $otp) {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio_verify_sid = env('TWILIO_VERIFY_SID');

        $twilio = new Client($sid, $token);

        try {
            $twilio->verify->v2->services($twilio_verify_sid)
                ->verifications
                ->create($mobile, "sms", ["locale" => "en"]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send OTP', 'error' => $e->getMessage()], 500);
        }
    }

    public function verifyOtpAndUpdateMobile(Request $request)
    {
        $validatedData = $request->validate([
            'otp' => 'required|digits:6',
            'phone' => 'required',
        ]);

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio_verify_sid = env('TWILIO_VERIFY_SID');

        $twilio = new Client($sid, $token);

        try {
            $verification = $twilio->verify->v2->services($twilio_verify_sid)
                ->verificationChecks
                ->create([
                    'to' => $validatedData['phone'], // The phone number
                    'code' => $validatedData['otp'], // The OTP entered by the user
                ]);

            if ($verification->valid) {
                // Update the user's phone number in the database
                $user = auth()->user();
                $user->phone = $validatedData['phone'];
                $user->save();

                return response()->json(['message' => 'Mobile number updated successfully']);
            } else {
                return response()->json(['error' => 'Invalid OTP'], 400);
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            Log::error("Twilio verification error: " . $e->getMessage());
            return response()->json(['error' => 'There was an error verifying the OTP.'], 500);
        }
    }
}