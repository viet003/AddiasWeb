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
        // dd(Cookie::get('remember_me'));

        if ($token = Cookie::get('remember_me')) {
            // dd($token);
            $user = User::where('remember_token', $token)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->route('shop');
            }
        }

        return $next($request);
    }
}
