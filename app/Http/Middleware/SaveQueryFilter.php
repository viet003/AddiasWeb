<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SaveQueryFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Lưu giá trị tìm kiếm vào provider
        $searchValue = $request->input('query', '');
        App::instance('query', $searchValue);

        $gender = $request->input('gender', '');                                                                                                            
        App::instance('gender', $gender);

        $brand = $request->input('brand', '');
        App::instance('brand', $brand);

        $price = $request->input('price', '');
        App::instance('price', $price);


        return $next($request);
    }
}
