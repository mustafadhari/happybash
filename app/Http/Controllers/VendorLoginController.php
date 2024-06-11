<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use App\Models\User;

class VendorLoginController extends Controller
{

    public function sendOTP(Request $request) {
        $validatedData = $request->validate([
            'country_code' => 'required',
            'phone' => 'required',
        ]);
        //$countryCode = '+91';
        $fullMobileNumber = $validatedData['country_code'] . $validatedData['phone'];
        $phoneExists = User::where('phone', $fullMobileNumber)->exists();
        if ($phoneExists) {
            $otp = rand(1000, 9999); // Generate OTP
            $this->sendTwilioOTP($fullMobileNumber, $otp);
    
            session(['otp' => $otp, 'phone' => $fullMobileNumber]); // Store OTP and mobile in session
            // Check if the request expects a JSON response
            if ($request->expectsJson()) {
                // Return a JSON response
                return response()->json(['message' => 'OTP sent successfully']);
            } else {
                // Redirect to OTP verification view
                return redirect()->route('verify');
            }
        } else {
            return response()->json(['message' => 'Phone number already exists.']);
        }
    }

    protected function sendTwilioOTP($mobile, $otp) {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio_verify_sid = env('TWILIO_VERIFY_SID');

        $twilio = new Client($sid, $token);

        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($mobile, "sms", ["locale" => "en"]);
            
        // Store OTP in session for later verification
        session(['otp' => $otp]);
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'sometimes|required|string|email',
            'password' => 'sometimes|required|string',
            'phone' => 'sometimes|required|string',
        ]);

        // Check if the user is attempting to log in with email/password
        if (isset($credentials['email']) && isset($credentials['password'])) {
            if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
                $user = Auth::user();
                $token = $user->createToken('vendor-token')->plainTextToken;
                return response()->json([
                    'message' => 'Login successful.',
                    'token' => $token
                ]);
            }
        }

        // Check if the user is attempting to log in with phone number
        if (isset($credentials['phone'])) {
            $user = User::where('phone', $credentials['phone'])->first();
            if ($user) {
                $token = $user->createToken('vendor-token')->plainTextToken;
                return response()->json([
                    'message' => 'Login successful.',
                    'token' => $token
                ]);
            }
        }

        return response()->json([
            'message' => 'The provided credentials are incorrect.'
        ], 401);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
