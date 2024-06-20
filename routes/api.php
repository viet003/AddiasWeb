<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Middleware\AuthApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::middleware([AuthApi::class])->group(function () {
    Route::post('addtocart', [CartController::class, 'addToCart']);
    Route::post('deletefromcart', [CartController::class, 'deleteFromCart']);
    Route::post('checkout', [OrderController::class, 'checkout']);
});

