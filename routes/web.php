<?php
// Controller

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Admin\AdminController;
// Middleware
use App\Http\Middleware\CheckCookie;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\SaveQuery;
use App\Http\Middleware\SaveQueryFilter;

// Đăng ký các route
Route::get('/', [HomeController::class, 'viewController'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/search', [SearchController::class, 'search'])->middleware(SaveQuery::class)->name('search');
Route::get('/searchfilter', [SearchController::class, 'searchFilter'])->middleware(SaveQueryFilter::class)->name('searchfilter');
Route::get('/male', [HomeController::class, 'male'])->name('male');
Route::get('/female', [HomeController::class, 'female'])->name('female');

Route::get('/admin', [AdminController::class, 'check'])->name('admin')->middleware(Authenticate::class);
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/login', [AuthController::class, 'getFormLogin'])->name('login')->middleware(CheckCookie::class);
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'getFormRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/forgotpass', [AuthController::class, 'getFormPass'])->name('forgotpass');
    Route::post('/forgotpass', [AuthController::class, 'forgotpass'])->name('auth.forgotpass');
});


Route::middleware([Authenticate::class, ])->group(function () {
    Route::get('/setting', [UserController::class, 'getFormSetting'])->name('user.show');
    Route::get('/cart', [CartController::class, 'getCart'])->name('cart.show');
    Route::get('/cart/{id}', [OrderController::class, 'getOrder'])->name('order.show');
    Route::post('/changepass', [AuthController::class, 'changepass'])->name('auth.changepass');
    Route::post('/customer/{id}', [UserController::class, 'update'])->name('customer.update');
});
