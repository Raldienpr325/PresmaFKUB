<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountdownController extends Controller
{
    //
    public function __construct()
    {
        
    }
    
    public function countdowncontroller(){
        return view('countdown');
    }
}
