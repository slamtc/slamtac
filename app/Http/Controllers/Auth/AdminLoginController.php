<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{


    public function __construct(Request $request)
    {
      $this->middleware('guest:admin');  
    } 
    public function showLoginForm()
    {
       return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6',
        ]);
        $rememberme = request('rememberme') == 1 ? true: false;
        if(auth::guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')],$rememberme ))
        {       
          return redirect('admin/basic_specialties');

        }

        return redirect()->back()->withInput($request->only('email'));
    }
}
