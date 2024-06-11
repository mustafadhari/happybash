<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HappyBashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth404Controller;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VendorAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/send-otp', [RegisterController::class, 'sendOTP'])->name('send-otp');
Route::get('/verify', function () { return view('auth.verify'); })->name('verify');
Route::post('/verify-otp', [RegisterController::class, 'verifyOTP'])->name('verify-otp');
Route::post('/finalize-registration', [RegisterController::class, 'finalizeRegistration'])->name('finalize-registration');
Route::get('/finalize-registration-form', function () {
    return view('auth.finalize_registration');
})->name('finalize-registration-form');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/categories/{categoryId}/subcategories', [CategoryController::class, 'showSubcategories'])->name('subcategories.show');
    Route::get('/subcategories/{subcategoryId}/products', [ProductController::class, 'showProducts'])->name('product-list');
    Route::get('/products/{productId}', [ProductController::class, 'show'])->name('product-details');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.show');
    Route::get('logout', [HappyBashController::class, 'logout']);
});


Route::group(['prefix' => 'vendor'], function () {
    Route::get('login', [VendorAuthController::class, 'showLoginForm'])->name('vendor.login');
    Route::post('login', [VendorAuthController::class, 'login']);
    Route::post('logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');

    Route::get('register', [VendorAuthController::class, 'showRegistrationForm'])->name('vendor.register');
    Route::post('register', [VendorAuthController::class, 'register']);
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'showAboutUs']);
Route::get('/contact-us', [PageController::class, 'showContactUs']);
Route::get('/terms-conditions', [PageController::class, 'showTerms']);
Route::get('/privacy-policy', [PageController::class, 'showPrivacyPolicy']);

Route::get('/account', [AccountController::class, 'index']);

Route::get('/address', [AddressController::class, 'index']);

Route::get('/auth-404', [Auth404Controller::class, 'index']);



