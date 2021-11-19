<?php

namespace App\Http\Controllers;

use App\Models\Ceknim;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\presma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CeknimController extends Controller
{
    public function index(){
        return view('user.ceknim');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'email' =>'required',
            // 'level' => 'required',
        ]);
        // dd($request);
        // dd($validatedData);
        $validasiNIM = explode("5070",$validatedData['NIM']);
        if( strlen($validasiNIM['0']) == "2" && strlen($validasiNIM['1']) == "9"){
            $cekkeberadaanNIM = DB::table('ceknims')->where('email', $validatedData['email'])->value('NIM');
            $cekkeberadaanemail = DB::table('ceknims')->where('email', $validatedData['email'])->first();
            $cekkeberadaanuserNIM = DB::table('ceknims')->where('NIM', $validatedData['NIM'])->first();
            if(!$cekkeberadaanemail){
                if($cekkeberadaanuserNIM){
                    return redirect('/halaman-ceknim')->with('failedceknim', 'Data Salah');
                } else {
                    Ceknim::create($validatedData);
                    DB::table('users')
                    ->where('id', Auth::user()->id)
                    ->update(['level' => 'superuser']);
                    return redirect('/vote-presma');
                }
            } else if($cekkeberadaanemail && $cekkeberadaanNIM == $validatedData['NIM']){
                DB::table('users')
                ->where('id', Auth::user()->id)
                ->update(['level' => 'superuser']);
                return redirect('/vote-presma');
            } else {
                return redirect('/halaman-ceknim')->with('failedceknim', 'Data Salah');
            }
            // return dd($user);
            // $user = DB::table('users')->find(Auth::user()->id);
            // $datauser = User::find(Auth::user()->id);
            // return dd($datauser);
            // $kirim_NIM = $validatedData['NIM'];
            // $datapresma = presma::all();
            // return view('user.vote', [
            //     'datas' => $datapresma,
            // ]);
            // $datapresma = presma::all();
            // return redirect('vote', [
            //     'datas' => $datapresma,
            // ]);
            // dd($user);
        }
        else {
            return redirect('/halaman-ceknim')->with('failedceknim', 'NIM anda tidak sesuai!!');
            exit;
        }

    }
}