<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\View\View;
use App\Models\Customer;
use App\Models\User;
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

    public function updateUser(Request $request, $id)
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

    public function index(): View
    {
        $users = User::latest()->paginate(5);
        
        return view('users.index',compact('users'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        
        User::create($request->all());
         
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    public function show(User $user): View
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user): View
    {
        return view('users.edit',compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'role' => 'required', 
        ]);
        
        $user->update($request->all());
        
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
         
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
