<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function dologin()
    {
    	return view('auth.login');
    }
}
