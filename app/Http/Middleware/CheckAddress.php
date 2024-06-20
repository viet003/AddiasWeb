<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('customer_id')) {
            $customerId = $request->input('customer_id');
            $customer = Customer::find($customerId); // Fetch the model instance

            if ($customer && $customer->phone_number == null) {
                return response()->json(['message' => 'Vui lòng cập nhật thông tin!'], 422);
            }
        }

        return $next($request);
    }
}
