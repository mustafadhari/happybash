<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $phone = $request->phone;
        // Generate OTP
        $otp = rand(100000, 999999);
        // Send OTP to the phone number
        // Save the OTP in the session
        $request->session()->put('otp', $otp);
        return response()->json(['status' => 'success', 'message' => 'OTP sent successfully']);
    }

    public function showOtpForm()
    {
        return view('auth.otp-confirm');
    }

    public function confirmOtp(Request $request)
    {
        $otp = $request->otp;
        if ($request->session()->get('otp') == $otp) {
            // OTP is correct
            return response()->json(['status' => 'success', 'message' => 'OTP confirmed']);
        } else {
            // OTP is incorrect
            return response()->json(['status' => 'error', 'message' => 'Incorrect OTP']);
        }
    }

    public function registerUser(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        $user = $this->create($request->all());

        return response()->json(['status' => 'success', 'message' => 'User registered successfully', 'user' => $user], 201);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'customer',
        ]);

        
    }

    protected function registered(Request $request, $user)
    {
        return redirect('/profile/complete');
        //return response()->json(['status' => 'success', 'user' => $user], 201);
    }
}