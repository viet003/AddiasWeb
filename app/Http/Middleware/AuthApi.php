<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->header('Authorization'));

        if (!$request->hasHeader('Authorization')) {
            return response()->json(['message' => 'Unauthorized. AccessToken not found.'], 401);
        }

        $authorizationHeader = $request->header('Authorization');

        if (strpos($authorizationHeader, 'Bearer ') !== 0) {
            return response()->json(['message' => 'Unauthorized. Invalid AccessToken format.'], 401);
        }

        $accessToken = substr($authorizationHeader, 30); // "Bearer " has 7 characters

        if (empty($accessToken)) {
            return response()->json(['message' => 'Unauthorized. AccessToken is empty.'], 401);
        }

        return $next($request);
    }
}
