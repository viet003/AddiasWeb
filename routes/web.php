<?php
// Controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\UserController;
// Middleware
use App\Http\Middleware\CheckCookie;

// Đăng ký các route
Route::get('/', [HomeController::class, 'viewController'])->name('shop');
Route::get('/login', [AuthController::class, 'getFormLogin'])->name('login')->middleware(CheckCookie::class);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/register', [AuthController::class, 'getFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/product', [ProductController::class, 'viewController'])->name('product.show');


Route::prefix('auth')->middleware('auth')->group(function () {
    Route::get('/setting', [UserController::class, 'getFormSetting'])->name('user.show');
    Route::get('/cart', [CartController::class, 'viewController'])->name('cart.show');
});
