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
        Log::info('sendOTP method called');

        $validatedData = $request->validate([
            'phone' => 'required|digits:10|unique:users',
        ]);
        $countryCode = '+91';
        $fullMobileNumber = $countryCode . $request->mobile;
        $otp = rand(1000, 9999); // Generate OTP
        $this->sendTwilioOTP($fullMobileNumber, $otp);
    
        // Replace this with actual SMS sending logic
        // $smsService->sendSMS($mobile, "Your OTP is: $otp");
    
        session(['otp' => $otp, 'mobile' => $mobile]); // Store OTP and mobile in session
        return redirect()->route('verify'); // Redirect to OTP verification view
    }

    // Method for OTP verification
    public function verifyOTP(Request $request) {
        $request->validate([
            'otp' => 'required|digits:4',
        ]);

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio_verify_sid = env('TWILIO_VERIFY_SID');

        $twilio = new Client($sid, $token);

        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($request->otp, ["to" => session('mobile')]);

        if ($verification->valid) {
            // OTP is correct, proceed to email and password entry
            return view('auth.finalize_registration', ['mobile' => session('mobile')]);
        } else {
            // Incorrect OTP
            return back()->withErrors(['otp' => 'The provided OTP is incorrect.']);
        }
    }

    // Finalize registration and create user
    public function finalizeRegistration(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'mobile' => session('mobile'),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Clear the session
        session()->forget(['otp', 'mobile']);

        // TODO: Redirect to login or directly log in the user
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

}
