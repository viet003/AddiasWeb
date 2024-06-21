<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
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
            $products = Product::inRandomOrder()->limit(10)->get();
            $new_products = Product::orderBy('created_at', 'desc')->take(10)->get();
            $totalProducts = Product::count();
            
            $view->with('products', $products);
            $view->with('new_products', $new_products);
            $view->with('totalProducts', $totalProducts);
        });

        View::composer('*', function ($view) {
            if (Auth::check()) {
                $totalItems = Cart::where('user_id', Auth::user()->id)->count();
                $view->with('totalItems', $totalItems);
            }
        });

        View::composer('*', function ($view) {
            if (App::bound('query')) {
                $searchValue = App::make('query');
            } else {
                $searchValue = 'Giày'; // Giá trị mặc định nếu không có
            }
            
            if (App::bound('gender')) {
                $gender = App::make('gender');
            } else {
                $gender = ''; 
            }
        
            if (App::bound('brand')) {
                $brand = App::make('brand');
            } else {
                $brand = ''; 
            }
        
            if (App::bound('price')) {
                $price = App::make('price');
            } else {
                $price = ''; 
            }
        
            // Thêm các tham số vào tất cả các view
            $view->with('gender', $gender);
            $view->with('brand', $brand);
            $view->with('price', $price);
            $view->with('query', $searchValue);
        });


        View::composer('*', function ($view) {
            $brands = Product::distinct()->pluck('brand');
            $view->with('brands', $brands);
        });


        Paginator::useTailwind();
    }
}
