<?php

namespace App\Http\Controllers;

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
            ->paginate(10)
            ->appends($request->except('page'));

        return view('pages.search', compact('products'));
    }

    public function searchFilter(Request $request) {

        $query = $request->input('query');
        $gender = $request->input('gender');
        $brand = $request->input('brand');
        $price = $request->input('price');

        // dd($query, $gender, $brand, $price);

        $products = Product::query()
            ->when($query, function ($queryBuilder, $query) {
                return $queryBuilder->where('name_product', 'LIKE', '%' . $query . '%');
            })
            ->when($gender, function ($queryBuilder, $gender) {
                return $queryBuilder->where('gender', $gender);
            })
            ->when($brand, function ($queryBuilder, $brand) {
                return $queryBuilder->where('brand', $brand);
            })
            ->when($price, function ($queryBuilder, $price) {
                if ($price == 'Thấp - Cao') {
                    return $queryBuilder->orderBy('price', 'asc');
                } elseif ($price == 'Cao - Thấp') {
                    return $queryBuilder->orderBy('price', 'desc');
                }
            })
            ->paginate(10)
            ->appends($request->except('page'));

        return view('pages.search', compact('products'));
    }
}
