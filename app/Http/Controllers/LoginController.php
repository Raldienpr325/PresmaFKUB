<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function logincontroller(){
        return view('user.opsi');
    }
}