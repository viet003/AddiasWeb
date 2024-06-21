<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function viewController() {
        return view('pages.home');
    }

    public function male() {
        $maleProducts = Product::where('gender', 'Nam')->take(10)->get();
        return view('pages.male', compact('maleProducts'));
    }

    public function female() {
        $femaleProducts = Product::where('gender', 'Nữ')->take(10)->get();
        return view('pages.female', compact('femaleProducts'));
    }
}
