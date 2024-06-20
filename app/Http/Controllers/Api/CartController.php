<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function getCart()
    {
        $items = $this->getItem();
        return view('pages.cart', compact('items'));
    }

    public function getItem()
    {
        return Cart::where('user_id', Auth::user()->id)->get();
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'product_id' => 'required|integer|exists:products,id',
            'color' => 'required|string|max:200',
            'size' => 'required|string|max:200',
        ]);


        try {

            Cart::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'color' => $request->color,
                'size' => $request->size,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Thêm sản phẩm thành công!',
            ]);
        } catch (\Throwable $th) {
            // dd($th);
            return response()->json([
                'status' => 400,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function deleteFromCart(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:carts,id',
        ]);

        try {
            $cartItem = Cart::where('id',$request->id);

            if ($cartItem) {
                $cartItem->delete();

                return response()->json([
                    'status' => 200,
                    'message' => 'Deleted product from cart successfully!',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Product not found in cart.',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 400,
                'message' => $th->getMessage(),
            ]);
        }
    }
}
