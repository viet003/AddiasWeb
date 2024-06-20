<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getOrder($id)
    {
        $item = $this->getItemById($id);
        return view('pages.order', compact('item'));
    }

    public function getItemById($id)
    {
        return Cart::find($id);
    }

    public function checkout(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|integer',
        'color' => 'required|string|max:200',
        'size' => 'required|string|max:200',
        'customer_id' => 'required|integer',
        'total' => 'required|numeric',
        'quantity' => 'required|integer',
    ]);

    try {
        // Create a new order
        $order = Order::create([
            'product_id' => $validated['product_id'],
            'color' => $validated['color'],
            'size' => $validated['size'],
            'customer_id' => $validated['customer_id'],
            'quantity' => $validated['quantity'],
            'bill' => $validated['total'],
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Thanh toán thành công!',
            'order' => $order
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 400,
            'message' => 'Có lỗi xảy ra. Vui lòng thử lại sau!',
            'error' => $e->getMessage(),
        ], 400);
    }
}


}
