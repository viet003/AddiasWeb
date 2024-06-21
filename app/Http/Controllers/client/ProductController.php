<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(5);
        
        return view('products.index',compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'gender' => 'required'
        ]);
        
        Product::create($request->all());
         
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);

    //     $product->load('images');

    //     if (!$product) {
    //         abort(404, 'Product not found');
    //     }

    //     $images = $product->images;

    //     // dd($product->name_product);

    //     return view('pages.product', compact('product', 'images'));
    //     }

    public function show(Product $product): View
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product): View
    {
        return view('products.edit',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'gender' => 'required'
        ]);
        
        $product->update($request->all());
        
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
         
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
