<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegistersUsers;

class ProfileController extends Controller
{
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showCompleteForm()
    {
        return view('profile.complete');
    }

    public function complete(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'street' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'postal_code' => 'nullable',
            'avatar' => 'image',
        ]);

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postal_code = $request->postal_code;
        $user->save();

        if ($request->hasFile('avatar')) {
            $user->avatar = $request->avatar->store('avatars');
            $user->save();
        }
        return response()->json(['status' => 'success', 'message' => 'Profile completed successfully', 'user' => $user], 200);
    }
}