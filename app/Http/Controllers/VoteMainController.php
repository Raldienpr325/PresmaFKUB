<?php

namespace App\Http\Controllers;

use App\Models\presma;
use Illuminate\Http\Request;

class VoteMainController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('ceklevel:admin');
    }
    
    public function votemaincontroller(){
        $dtvote = presma::all();
        return view('admin.vote.main',compact('dtvote'));
    }
    public function create(){
        return view('admin.vote.input');
    }
    public function store(Request $request){
        // dd($request)->all();
        presma::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);
        return redirect('admin-vote');
    }
}