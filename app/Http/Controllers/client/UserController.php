<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getFormSetting()
    {
        return view(view: 'pages.setting');
    }
}
