<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // Check if the request is from the API (expects a JSON response)
        if ($request->expectsJson()) {
            $token = $user->createToken('MobileAppAccess')->plainTextToken;
            return response()->json([
                'message' => 'Authentication successful.',
                'token' => $token
            ]);
        }

        // For web requests, redirect to the intended location
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Method to handle OTP generation and sending
    public function sendOTP(Request $request) {
        $validatedData = $request->validate([
            'country_code' => 'required',
            'phone' => 'required|unique:users',
        ]);
        //$countryCode = '+91';
        $fullMobileNumber = $validatedData['country_code'] . $validatedData['phone'];
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

    public function apiLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'email',
            'password' => 'string',
            'phone' => 'string'
        ]);

        // Check if the user is attempting to log in with email/password
        if (isset($credentials['email']) && isset($credentials['password'])) {
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('MobileAppAccess')->plainTextToken;
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
                $token = $user->createToken('MobileAppAccess')->plainTextToken;
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

    
}
