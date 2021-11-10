<?php

namespace App\Http\Controllers;

use App\Models\dpm;
use App\Models\presma;
use App\Models\voting;
use App\Models\voting2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VoteController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        //diarahkan kehalaman login
    }
    
    public function votecontroller(){
        return view('user.vote-presma.main');
    }
    public function votedpmcontroller(){
        return view('user.vote-dpm.main');
    }

    public function datavotepresma(){
        $datapresma = presma::all();
        return view('user.vote-presma.main', ['datas' => $datapresma,]);
    }
    public function datavotedpm(){
        $datadpm = dpm::all();
        return view('user.vote-dpm.main', ['datas2' => $datadpm,]);
    }
    public function vote($id){
        $data = voting::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['users_id'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            ['presmas_id'=>$id,'users_id'=>Auth::user()->id]
            #Jika data belum ada maka add presmas_id dan users_id
        );
      return view('user.Donevote');
    }
    public function vote2($id){
        $data = voting2::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['users_id'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            ['dpm_id'=>$id,'users_id'=>Auth::user()->id] #Jika data belum ada maka add presmas_id dan users_id
        );
      return view('user.logout.main');
    }
}