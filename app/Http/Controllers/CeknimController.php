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
            // 'level' => 'required',
        ]);
        // dd($validatedData['NIM']);
        $validasiNIM = explode("5060",$validatedData['NIM']);
        if( strlen($validasiNIM['0']) == "2" && strlen($validasiNIM['1']) == "9"){
            Ceknim::create($validatedData);
            $datauser = User::find(Auth::user()->id);
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
            DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['level' => 'superuser']);
            // $user = DB::table('users')->find(Auth::user()->id);
            // return dd($user);
            return redirect('/vote-presma');
        }
        else {
            return redirect('/halaman-ceknim')->with('failedlogin', 'NIM anda tidak sesuai!!');
            exit;
        }

    }
}
