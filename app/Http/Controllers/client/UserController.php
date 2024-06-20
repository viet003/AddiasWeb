<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getFormSetting()
    {
        $orders = $this->bill();
        return view('pages.setting', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:250',
        ]);

        try {
            $customer = Customer::findOrFail($id);
            $customer->update($validated);

            return redirect()->back()->with('success', 'Cập nhật thông tin thành công!.');

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function bill() {
        return Order::where('customer_id', Auth::user()->customer->id)->get();
    }
}
