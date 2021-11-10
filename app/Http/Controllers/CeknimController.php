<?php

namespace App\Http\Controllers;

use App\Models\Ceknim;
use Illuminate\Http\Request;
use App\Models\presma;

class CeknimController extends Controller
{
    public function index(){
        return view('user.ceknim');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'level' => 'required',
        ]);
        // dd($validatedData['NIM']);
        $validasiNIM = explode("5060",$validatedData['NIM']);
        if( strlen($validasiNIM['0']) == "2" && strlen($validasiNIM['1']) == "9"){
            Ceknim::create($validatedData);
            // $kirim_NIM = $validatedData['NIM'];
            // $datapresma = presma::all();
            // return view('user.vote', [
            //     'datas' => $datapresma,
            // ]);
            // $datapresma = presma::all();
            // return redirect('vote', [
            //     'datas' => $datapresma,
            // ]);
            return redirect('/vote-presma');
        }
        else {
            return redirect('/halaman-ceknim')->with('failedlogin', 'NIM anda tidak sesuai!!');
            exit;
        }

    }
}
