<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    public function check()
    {
        if(Auth::id())
        {
            $role = Auth()->user()->role;

            if($role == 1)
            {
                return view('pages.admin');
            } 
            else if($role == 0)
            {
                return view('pages.home');  
            }
        }
        else
        {
            return redirect()->back()->with('error','Bạn cần có quyền hạn Administrator!');
        }
    }
}