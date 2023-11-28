<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [RegisterController::class, 'register'])->name('api.register');
Route::post('/confirm-otp', [RegisterController::class, 'confirmOtp'])->name('api.confirmOtp');
Route::post('/register-user', [RegisterController::class, 'registerUser'])->name('api.registerUser');
Route::post('profile/complete', [ProfileController::class, 'complete'])->name('api.profile.complete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
