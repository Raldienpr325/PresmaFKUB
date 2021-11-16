<?php

namespace App\Http\Controllers;

use App\Models\dpm;
use App\Models\presma;
use App\Models\voting;
use App\Models\voting2;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Bilfeldt\LaravelFlashMessage\Message;


class VoteController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        //diarahkan kehalaman login
    }
    
    public function votecontroller(){
        return view('user.vote-presma.main', [
            'title' => 'Vote Presma',
        ]);
    }
    public function votedpmcontroller(){
        return view('user.vote-dpm.main', [
            'title' => 'Vote DPM',
        ]);
    }

    public function datavotepresma(){
        $cekpresensi = DB::table('votings')->where('name', Auth::user()->name)->first();
        if($cekpresensi){
            return view('user.Donevote', [
                'title' => 'Vote Presma',
            ]);
        }else {
            $datapresma = presma::all();
            return view('user.vote-presma.main', [
                'title' => 'Vote',
                'datas' => $datapresma,
            ]);
        }
    }
    
    public function datavotedpm(){
        $cekpresensi = DB::table('voting2s')->where('name', Auth::user()->name)->first();
        if($cekpresensi){
            return view('user.logout.main', [
                'title' => 'Logout Vote',
            ]);
        } else {
        $datadpm = dpm::all();
        return view('user.vote-dpm.main', [
                'title' => 'Vote',
                'datas2' => $datadpm,]);
        }
    }
    public function vote($id){
        
        $datadpm = dpm::all();
        $data = voting::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['usersid'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            ['presmasid'=>$id,'usersid'=>Auth::user()->id,'name'=>Auth::user()->name]
            #Jika data belum ada maka add presmas_id dan users_id
        );
        return view('user.vote-dpm.main',[ 
            'title' => 'Done Vote',
            'datas2' =>$datadpm,
            'databaru' =>$data,
            ]);
    }

    public function vote2($id){
        $data = voting2::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['usersid'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            ['dpmsid'=>$id,'usersid'=>Auth::user()->id,'name'=> Auth::user()->name] #Jika data belum ada maka add presmas_id dan users_id
        );
      return view('user.logout.main', [
        'title' => 'Logout Vote',
    ]);
    }
}