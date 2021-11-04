<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteMainController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function votemaincontroller(){
        return view('admin.vote.main');
    }
}
