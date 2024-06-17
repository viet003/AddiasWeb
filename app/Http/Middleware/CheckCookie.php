<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class CheckCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($token = Cookie::get('remember_me')) {
            // dd($token);
            $user = User::where('remember_token', $token)->first();
            if ($user) {
                // dd($user->email);
                Auth::login($user);
                return redirect('/');
            }
        }

        // Cho phép request tiếp tục nếu không có cookie 'remember_me'
        return $next($request);
    }
}
