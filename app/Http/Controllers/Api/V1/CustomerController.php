<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\V1\CustomerResource;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return response()->json($customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
        return $customer;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateCustomerRequest $request, Customer $customer)
    // {
    //     try {
    //         $customer->update($request->validated());
    
    //         return response()->json(new CustomerResource($customer), 200);

    //     } catch (\Throwable $th) {
    //         return response()->json(['error' => 'Cập nhật không thành công', 'message' => $th->getMessage()], 500);
    //     }
    // }

    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'first_name' => 'nullable|string|max:50',
            'last_name' => 'nullable|string|max:50',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:250',
        ]);

        try {
            $customer = Customer::findOrFail($id);

            if ($customer->user_id !== $request->user_id) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }

            $customer->update($validated);

            return response()->json([
                'message' => 'Thông tin đã được cập nhật thành công!',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => 'Cập nhật không thành công', 'message' => $th->getMessage()], 500);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
