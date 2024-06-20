<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $totalProducts = Product::count();
            $view->with('totalProducts', $totalProducts);
        });

        View::composer('*', function ($view) {
            if (Auth::check()) {
                $totalItems = Cart::where('user_id', Auth::user()->id)->count();
                $view->with('totalItems', $totalItems);
            }
        });
    }
}
