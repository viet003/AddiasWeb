<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
                $minutes = 60 * 24 * 30; // 30 days
                $cookie = cookie('remember_me', $remember_token, $minutes);
                User::where('id', $user->id)->update(['remember_token' => $remember_token]);

                return redirect('/')->with('user', $user->user_name)->cookie($cookie);
            }

            return redirect('/')->with('user', $user->user_name);
        }

        return redirect()->back()->withErrors('Thông tin tài khoản hoặc mật khẩu không chính xác!');
    }


    public function getFormRegister()
    {
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

        $user = User::create([
            'user_name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'role' => $request->has('role') ? 1 : 0,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Customer::create([
            'user_id' => $user->id,
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $cookie = Cookie::forget('remember_me');
        return redirect()->route('shop')->withCookie($cookie);
    }


    public function getFormPass()
    {
        return view(view: 'forgotpass');
    }

    public function forgotpass(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        $pass = Str::random(8);

        User::where('email', $request->email)->update(['password' => Hash::make($pass)]);

        Mail::send('mails.mail', compact('pass'), function ($email) {
            $email->to('0bitodev21@gmail.com', 'Admin');
            $email->subject('Lấy lại mật khẩu');
        });

        return redirect()->route('login')->with('success', 'Thành công! Vui lòng kiểm tra địa chỉ email của bạn!');
    }

    public function changepass(Request $request)
    {;

        // Xác thực đầu vào
        $request->validate([
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed'
        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            User::where('id', Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
                                    return redirect()->route('user.show')->with('success', 'Thành công! Mật khẩu của bạn đã được thay đổi.');
        } else {
            return redirect()->back()->withErrors('Thông tin mật khẩu không chính xác!');
        }
    }
}
