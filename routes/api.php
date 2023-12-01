<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\DeviceController;

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

Route::post('/send-otp', [RegisterController::class, 'sendOTP']);
Route::post('/verify-otp', [RegisterController::class, 'verifyOTP']);
Route::post('/finalize-registration', [RegisterController::class, 'finalizeRegistration']);
Route::middleware('auth:sanctum')->post('/register-device', [DeviceController::class, 'register']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
