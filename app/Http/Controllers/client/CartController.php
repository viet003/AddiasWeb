<?php

namespace App\Http\Controllers\Client;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function viewController() {
        return view(view: 'pages.cart');
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = $request->user();
        $product = Product::find($request->product_id);

        // Lấy hoặc tạo giỏ hàng của người dùng
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $cartItem = Cart::where('id', $cart->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            // Nếu có, cập nhật số lượng
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // Nếu không, tạo mới
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return response()->json(['message' => 'Product added to cart successfully']);
    }
}
