<?php

namespace App\Http\Controllers;

use App\Models\Ceknim;
use Illuminate\Http\Request;

class CeknimController extends Controller
{
    public function index(){
        return view('user.ceknim');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
        ]);
        // dd($validatedData['NIM']);
        
        // $fk18 = '185070';
        $fk20 = '195060';
        // $fk20 = '205070';
        // $fk20 = '215070';

        $validasiNIM = explode("5060",$validatedData['NIM']);
        if( strlen($validasiNIM['0']) == "2" && strlen($validasiNIM['1']) == "9"){
            Ceknim::create($validatedData);
            return redirect('vote')->with('toast_success', 'Selamat Memilih !');
        }
        else {
            return redirect('/halaman-ceknim')->with('failedlogin', 'NIM anda tidak sesuai!!');
            exit;
        }

    }
}
