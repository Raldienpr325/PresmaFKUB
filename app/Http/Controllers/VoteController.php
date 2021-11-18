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
        $cekpresensi = DB::table('votings')->where('google_id', Auth::user()->google_id)->first();
        $dpm = DB::table('voting2s')->where('google_id', Auth::user()->google_id)->first();

        if ($dpm && $cekpresensi) {
            return view('user.Donevote', [
                'title' => 'Vote Presma',
            ]);
        }
        else if($cekpresensi){
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
        $cekpresensi = DB::table('voting2s')->where('google_id', Auth::user()->google_id)->first();
        $presma = DB::table('votings')->where('google_id', Auth::user()->google_id)->first();
        
        if(!$presma && $cekpresensi){
            return view('user.Donevote', [
                'title' => 'Vote Presma',   
            ]);
        }
        
        else if($cekpresensi){
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
        $datatabeluser = DB::table('users')->where('email', Auth::user()->email)->first();
        $datauser = DB::table('ceknims')->where('email', Auth::user()->email)->first();
        $presma = DB::table('votings')->where('google_id', Auth::user()->google_id)->first();
        $dpm = DB::table('voting2s')->where('google_id', Auth::user()->google_id)->first();
        $datapresma = DB::table('presmas')->where('id', $id)->first();
        // dd($datauser->NIM);
        $datadpm = dpm::all();
        $data = voting::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['usersid'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            [
                'user-name'=> $datauser->nama,
                'user-NIM' => $datauser->NIM,
                'presma-name' => $datapresma->nama,
                'google_id' => $datatabeluser->google_id,
                'presmasid'=>$id,
                'usersid'=>Auth::user()->id,
                'name'=>Auth::user()->name
            ],
            // ['user-NIM' => $datauser->NIM],
            // ['presma-name' => $datapresma->nama],
            // ['presmasid'=>$id,'usersid'=>Auth::user()->id,'name'=>Auth::user()->name]
            #Jika data belum ada maka add presmas_id dan users_id
        );
        if($dpm && $presma){
            return view('user.logout.main', [
                'title' => 'Logout Vote',
            ]);
        }
        if($dpm){
            return view('user.Donevote', [
                'title' => 'Vote Presma',
            ]);
        }
        else{
            return view('user.vote-dpm.main',[ 
                'title' => 'Done Vote',
                'datas2' =>$datadpm,
                'databaru' =>$data,
                ]);
        }
       
    }

    public function vote2($id){
        $datatabeluser = DB::table('users')->where('email', Auth::user()->email)->first();
        $datauser = DB::table('ceknims')->where('email', Auth::user()->email)->first();
        $presma = DB::table('votings')->where('google_id', Auth::user()->google_id)->first();
        $dpm = DB::table('voting2s')->where('google_id', Auth::user()->google_id)->first();
        $datadpm = DB::table('dpms')->where('id', $id)->first();
        voting2::firstOrCreate( #dicek datanya belum ada maka create , kalau ada tidak melakukan apapun
            ['usersid'=>Auth::user()->id], #parameter pertama digunakan untuk mengecek
            ['dpmsid'=>$id,
            'user-name' => $datauser->nama,
            'user-NIM' => $datauser->NIM,
            'google_id' => $datatabeluser->google_id,
            'dpm-name' => $datadpm->namadpm,
            'usersid'=>Auth::user()->id,
            'name'=> Auth::user()->name] #Jika data belum ada maka add presmas_id dan users_id
        );
        if($presma && $dpm ){
            return view('user.logout.main', [
                'title' => 'Logout Vote',
            ]);
        }
        else{
            return view('user.Donevote', [
                'title' => 'Vote Presma',
            ]);
        }
     
    }
}