<?php

namespace App\Http\Controllers;

use App\Models\Ceknim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CeknimController extends Controller
{
    public function index(){
        return view('user.ceknim');
    }

////////////////////////////////

    public function store(Request $request){
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'level' => 'required',
        ]);
        // dd($validatedData['NIM']);
        // $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        // $results = DB::select('select * from users where id = ?', [1]);
        $results = User::select('select * from users where name = ?', $validatedData['nama']);
        if($results){
            // dd($results);
            return view('user.vote');
        }
        
        $validasiNIM = explode("5060",$validatedData['NIM']);
        if ( strlen($validasiNIM['0']) == "2" && strlen($validasiNIM['1']) == "9"){
            Ceknim::create($validatedData);
            return ('vote');
        }
        else {
            return redirect('/halaman-ceknim')->with('failedlogin', 'NIM anda tidak sesuai!!');
            exit;
        }

    }
}
