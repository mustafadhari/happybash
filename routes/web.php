<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseGuideController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth404Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Place custom authentication routes here
Route::get('/register', function () {
    Log::info('Register route accessed');
    return view('auth.register');
})->name('register');
Route::post('/send-otp', [RegisterController::class, 'sendOTP'])->name('send-otp');
Route::get('/verify', function () { return view('auth.verify'); })->name('verify');
Route::post('/verify-otp', [RegisterController::class, 'verifyOTP'])->name('verify-otp');
Route::post('/finalize-registration', [RegisterController::class, 'finalizeRegistration'])->name('finalize-registration');



// Product routes
Route::resource('products', ProductController::class);

// Service routes
Route::resource('services', ServiceController::class);

// Addon routes
Route::resource('addons', AddonController::class);

// Booking routes
Route::resource('bookings', BookingController::class);

// User routes
Route::resource('users', UserController::class);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('index/{locale}', [HomeController::class, 'lang']);

// Social login routes
Route::get('/auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('social.login');
Route::get('/auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('logout', [CustomerLoginController::class, 'logout']);

    //Route::get('{any}', [HomeController::class, 'index']);
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/purchase-guide', [PurchaseGuideController::class, 'index']);

Route::get('/about-us', [PageController::class, 'showAboutUs']);
Route::get('/contact-us', [PageController::class, 'showContactUs']);
Route::get('/terms-conditions', [PageController::class, 'showTerms']);
Route::get('/privacy-policy', [PageController::class, 'showPrivacyPolicy']);

Route::get('/account', [AccountController::class, 'index']);

Route::get('/address', [AddressController::class, 'index']);

Route::get('/auth-404', [Auth404Controller::class, 'index']);
