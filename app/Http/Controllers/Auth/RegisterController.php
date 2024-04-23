<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            ],
            [
                'avatar.max' => 'Photo size not be greater than 2 MB!',
                'avatar.max' => 'Photo must be an image!',
                'avatar.mimes' => 'Photo must be an jpg, jpeg or png!'
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/users');
            $avatar->move($avatarPath, $avatarName);
        }
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $avatarName
        ]);
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

    // Method for OTP verification
    public function verifyOTP(Request $request) {
        $validatedData = $request->validate([
            'otp' => 'required|digits:6',
            'phone'=> 'required',
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
                if ($request->expectsJson()) {
                    // Mobile app is expecting a JSON response
                    return response()->json(['message' => 'OTP verified successfully']);
                } else {
                    // Web app, redirect to the appropriate page
                    return redirect()->route('finalize-registration-form');
                }
            } else {
                if ($request->expectsJson()) {
                    // Mobile app error response
                    return response()->json(['error' => 'Invalid OTP'], 400);
                } else {
                    // Web app, redirect back with error
                    return back()->withErrors(['otp' => 'Invalid OTP']);
                }
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            Log::error("Twilio verification error: " . $e->getMessage());
            return back()->withErrors(['otp' => 'There was an error verifying the OTP.']);
        }
    }


    // Finalize registration and create user
    public function finalizeRegistration(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'sometimes|required|unique:users,phone',
        ]);
    
        // Check if the mobile number is provided in the request, otherwise fall back to the session.
        $phone = $request->filled('phone') ? $validatedData['phone'] : session('phone');
        if (!$phone) {
            return response()->json(['message' => 'Mobile number is required.'], 422);
        }
    
        // Create the user
        $user = User::create([
            'name'=> $validatedData['name'],
            'phone' => $phone,
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Clear the session for the web app
        session()->forget(['otp', 'mobile']);
        Auth::login($user);
        $token = $user->createToken('UserToken')->plainTextToken;
        // Handle the response for the web app
        if ($request->is('api/*')) {
            // API response (for mobile app)
            return response()->json(['message' => 'Registration successful.', 'token' => $token]);
        } else {
            // Web response (for web app)
            return redirect()->intended('dashboard'); // Or wherever you want to redirect users after registration
        }
    }
    



}
