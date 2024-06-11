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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\UserLocationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LabelTranslationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\WaitlistController;
use App\Http\Controllers\VendorRegisterController;
use App\Http\Controllers\VendorLoginController;
use App\Http\Controllers\VendorController;



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


Route::group(['prefix' => 'vendor'], function () {
    // Registration routes
    Route::post('request-otp', [VendorRegisterController::class, 'requestOtp']);
    Route::post('verify-otp', [VendorRegisterController::class, 'verifyOtp']);
    Route::post('register', [VendorRegisterController::class, 'register']);

    // Authentication routes
    Route::post('login', [VendorLoginController::class, 'login']);
    Route::post('logout', [VendorLoginController::class, 'logout']);

    // Other vendor-related routes
    Route::post('upload-document', [VendorController::class, 'uploadDocument']);
});

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category_id}/subcategories', [SubcategoryController::class, 'index']);



Route::post('/category', [CategoryController::class, 'store']);
Route::post('/subcategory', [SubcategoryController::class, 'store']);
Route::put('/category/{category}', [CategoryController::class, 'update']);
Route::put('/subcategory/{subcategory}', [SubcategoryController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::post('/products/{product}/availability', [AvailabilityController::class, 'checkAvailability']);
Route::post('/labels', [LabelTranslationController::class, 'insert']);
Route::get('/labels/{label_id}', [LabelTranslationController::class, 'get']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API route for login
Route::post('/sendloginOTP', [LoginController::class, 'sendOTP']);
Route::post('/login', [LoginController::class, 'apiLogin']);
Route::apiResource('locations', LocationController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/profile', [UserController::class, 'profile']);
    Route::patch('/user/profile', [UserController::class, 'updateProfile']);
    Route::post('/user/request-otp', [UserController::class, 'requestOtpForMobileChange']);
    Route::post('/user/verify-otp', [UserController::class, 'verifyOtpAndUpdateMobile']);
    //Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/user/location', [UserLocationController::class, 'show']);
    Route::put('/user/location', [UserLocationController::class, 'update']);
    Route::get('/addresses', [AddressController::class, 'index']);
    Route::post('/addresses', [AddressController::class, 'store']);
    Route::put('/addresses/{address}', [AddressController::class, 'update']);
    Route::delete('/addresses/{address}', [AddressController::class, 'destroy']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
    Route::get('/bookings', [BookingController::class, 'index']); // List all bookings
    Route::post('/bookings', [BookingController::class, 'store']); // Create a new booking
    Route::get('/bookings/{booking}', [BookingController::class, 'show']); // Show a specific booking
    Route::put('/bookings/{booking}', [BookingController::class, 'update']); // Update a specific booking
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy']); // Delete a specific booking
    // Additional route for listing user-specific bookings, if needed
    Route::get('/user/bookings', [BookingController::class, 'userBookings']); // List bookings for the authenticated user
    Route::post('/cart/add', [CartController::class, 'addToCart']);
    Route::patch('/cart/item/{cartItem}', [CartController::class, 'updateCartItem']);
    Route::delete('/cart/item/{cartItem}', [CartController::class, 'removeCartItem']);
    Route::get('/cart', [CartController::class, 'viewCart']);
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->middleware('auth:sanctum');
    Route::put('/category/{category}', [CategoryController::class, 'update']);
    Route::put('/subcategory/{subcategory}', [SubcategoryController::class, 'update']);
    Route::post('/wishlist/add/{productId}', [WishlistController::class, 'addToWishlist']);
    Route::delete('/wishlist/remove/{productId}', [WishlistController::class, 'removeFromWishlist']);
    Route::get('/wishlist', [WishlistController::class, 'getWishlist']);
    Route::post('/waitlist/add/{productId}', [WaitlistController::class, 'addToWaitlist']);
    Route::delete('/waitlist/remove/{productId}', [WaitlistController::class, 'removeFromWaitlist']);
    Route::get('/waitlist', [WaitlistController::class, 'getWaitlist']);
    
});

