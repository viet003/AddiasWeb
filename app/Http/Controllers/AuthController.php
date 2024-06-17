<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getFormLogin()
    {
        return view('login');
    }

    
    public function login(Request $request)
    {
        // dd($request->all());
    
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = User::where('email', $request->email)->first();
            
            Auth::login($user);
    
            if ($request->has('remember')) {
                $remember_token = Str::random(60);
                User::updated([
                    'remember_token'=>$remember_token
                ]);
                $minutes = 60 * 24 * 30; // 30 days
                $cookie = cookie('remember_me', $remember_token, $minutes);
    
                return redirect('/')->with('user', $user->user_name)->cookie($cookie);
            }
    
            return redirect('/')->with('user', $user->user_name);
        }
    
        return redirect()->back()->withErrors('Thông tin tài khoản hoặc mật khẩu không chính xác!');
    }
    

    public function getFormRegister() {
        return view('register');
    }
    
    public function register(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'user_name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'role' => $request->has('role') ? 1 : 0,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $cookie = Cookie::forget('remember_me');
        return redirect()->route('shop')->withCookie($cookie);
    }

}
