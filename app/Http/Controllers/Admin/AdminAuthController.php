<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{

   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    public function home()
    {
        echo  'admin area';
    }

    public function login()
    {
        //if (!Auth::guard('admin')->check()) {
             return view('auth.login');
        //}
        //else
       // {
            return redirect('admin/home');
        //}

    }

    private function loginFailed(){
     return redirect()
        ->back()
        ->withInput()
        ->with('error','فشل تسجيل الدخول. يرجى المحاولة مرة أخرى!');
     }

    public function dologin()
    {
         //return redirect('sadasdasd');
    	$rememberme = request('rememberme') == 1 ? true: false;
    	if(auth()->guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')],$rememberme ))
    	{

              
         return redirect('admin/basic_specialties');

    	}else
        {
          //session()->flash('error','asdasdasdasd') ; 
          //return redirect('admin/login');  
          return $this->loginFailed();  
        }
    	
   
    }


    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }


}
