<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Document;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class VendorRegisterController extends Controller
{
    //
    public function requestOtp(Request $request)
    {
        $validatedData = $request->validate([
            'country_code' => 'required',
            'phone' => 'required|unique:vendors,primary_mobile_number',
        ]);

        $fullMobileNumber = $validatedData['country_code'] . $validatedData['phone'];
        $otp = rand(1000, 9999); // Generate OTP

        // Send OTP via Twilio
        $this->sendTwilioOTP($fullMobileNumber, $otp);

        // Store OTP and mobile in session
        session(['otp' => $otp, 'phone' => $fullMobileNumber]);

        // Return appropriate response
        return response()->json(['message' => 'OTP sent successfully']);
    }

    protected function sendTwilioOTP($mobile, $otp)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio_verify_sid = env('TWILIO_VERIFY_SID');

        $twilio = new Client($sid, $token);

        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($mobile, "sms", ["locale" => "en"]);
    }

    public function verifyOtp(Request $request)
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
                    'to' => $validatedData['phone'], 
                    'code' => $validatedData['otp'], 
                ]);

            if ($verification->valid) {
                // Clear OTP from session
                session()->forget(['otp', 'phone']);
                return response()->json(['message' => 'OTP verified successfully']);
            } else {
                return response()->json(['error' => 'Invalid OTP'], 400);
            }
        } catch (\Exception $e) {
            Log::error("Twilio verification error: " . $e->getMessage());
            return response()->json(['error' => 'There was an error verifying the OTP.'], 500);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'primary_mobile_number' => 'required|string|max:15|unique:vendors',
            'whatsapp_number' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255',
            'business_category' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'languages' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'referral_code' => 'nullable|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Create a new user if not existing
            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'Vendor',
                'phone' => $request->primary_mobile_number,
            ]);
        } else {
            // Check if the password matches for existing user
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['error' => 'Invalid credentials for existing user'], 422);
            }
        }

        // Check if the vendor profile already exists
        if (Vendor::where('user_id', $user->id)->exists()) {
            return response()->json(['error' => 'Vendor profile already exists for this user'], 422);
        }

        // Handle profile picture upload
        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        Vendor::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'business_name' => $request->business_name,
            'date_of_birth' => $request->date_of_birth,
            'primary_mobile_number' => $request->primary_mobile_number,
            'whatsapp_number' => $request->whatsapp_number,
            'email' => $request->email,
            'business_category' => $request->business_category,
            'city' => $request->city,
            'address' => $request->address,
            'languages' => $request->languages,
            'profile_picture' => $profilePicturePath,
            'referral_code' => $request->referral_code,
            'status' => 'pending', // Set status to pending
        ]);

        return response()->json(['message' => 'Vendor registered successfully.'], 201);
    }
}
