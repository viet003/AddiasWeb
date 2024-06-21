<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    public function check()
    {
        if(Auth::check())
        {
            $role = Auth()->user()->role;

            if($role == 1)
            {
                return view('pages.admin');
            } 
            else if($role == 0)
            {
                return redirect()->back()->withErrors('Bạn cần có quyền hạn Administrator!');
            }
        }
    }

}