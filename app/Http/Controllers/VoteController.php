<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function votecontroller(){
        return view('user.vote');
    }
}
