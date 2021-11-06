<?php

namespace App\Http\Controllers;
use App\Models\presma;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        //diarahkan kehalaman login
    }
    
    public function votecontroller(){
        return view('user.vote');
    }

    public function datavotepresma(){
        $datapresma = presma::all();
        return view('user.vote', [
            'datas' => $datapresma,
        ]);
    }
}