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
        Ceknim::create($validatedData);
        return redirect('vote')->with('toast_success', 'Selamat Memilih !');
    }
}
