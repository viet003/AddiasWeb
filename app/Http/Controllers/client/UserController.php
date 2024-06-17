<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getFormSetting()
    {
        return view(view: 'pages.setting');
    }
}
