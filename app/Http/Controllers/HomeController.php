<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function viewController() {

        $products = Product::inRandomOrder()->limit(10)->get();
        $new_products = Product::orderBy('created_at', 'desc')->take(10)->get();

        return view('pages.home', compact([
            'products',
            'new_products',
        ]));
    }
}
