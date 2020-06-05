<?php

namespace App\Http\Controllers\Admin\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MainController extends Controller
{
    public function index()
    {
       return view('admin.main.list');
    }// end index

   
}
