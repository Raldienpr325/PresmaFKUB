<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpsiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        //diarahkan ke halaman login
    }
    
    public function opsicontroller(){
        return view('user.opsi');
    }
}