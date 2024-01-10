<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AddressController;

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
Route::post('/register-device', [DeviceController::class, 'register']);

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category_id}/subcategories', [SubcategoryController::class, 'index']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API route for login
Route::post('/login', [LoginController::class, 'apiLogin']);
Route::apiResource('locations', LocationController::class);
Route::middleware('auth:sanctum')->group(function () {
    //Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/user/location', [UserLocationController::class, 'show']);
    Route::put('/user/location', [UserLocationController::class, 'update']);
    Route::get('/addresses', [AddressController::class, 'index']);
    Route::post('/addresses', [AddressController::class, 'store']);
    Route::put('/addresses/{address}', [AddressController::class, 'update']);
    Route::delete('/addresses/{address}', [AddressController::class, 'destroy']);
});

