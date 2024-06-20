<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $query = $request->input('query');


        // Perform the search
        $products = Product::where('name_product', 'LIKE', '%' . $query . '%')
            ->orWhere('gender', 'LIKE', '%' . $query . '%')
            ->paginate(10);

        return view('pages.search', compact('products'));
    }
}
