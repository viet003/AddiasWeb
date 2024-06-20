<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
//     Route::post('customers/{id}', [CustomerController::class, 'update'])->name('api.customer');
// });
