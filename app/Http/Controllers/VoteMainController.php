<?php

namespace App\Http\Controllers;

use App\Exports\DpmExport;
use App\Exports\PresmaExport;
use App\Exports\VotingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\presma;
use App\Models\dpm;
use App\Models\voting;
use App\Models\voting2;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class VoteMainController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('ceklevel:admin');
    }
    
    public function votemaincontroller()
    {
        $dtvote = presma::paginate(15);
        return view('admin.vote.main', [
            'title' => 'Vote PRESMA',
        ], compact('dtvote'));
    }
    
    public function votedpmcontroller()
    {
        $dpmvote = dpm::paginate(15);
        return view('admin.vote_dpm.main', [
            'title' => 'Vote DPM',
        ], compact('dpmvote'));
    }
    
    public function voting()
    {
        $voting = voting::paginate(15);
        return view('admin.proses-presma.main', [
            'title' => 'Proses Vote Presma',
        ], compact('voting'));
    }
    
    public function hasilvoting()
    {
        $hvoting = voting::paginate(100);
        return view('admin.hasil-presma.main', [
            'title' => 'hasil Vote Presma',
        ], compact('hvoting'));
    }
    
    public function hasilvoting2()
    {
        $hvoting2 = voting2::paginate(100);
        return view('admin.hasil-dpm.main', [
            'title' => 'hasil Vote Dpm',
        ], compact('hvoting2'));
    }
    
    public function voting2()
    {
        $voting2 = voting2::paginate(15);
        return view('admin.proses-dpm.main', [
            'title' => 'Proses Vote Presma',
        ], compact('voting2'));
    }
    
    public function create()
    {
        return view('admin.vote.input', [
            'title' => 'Vote Input',
        ]);
    }
    
    public function create_dpm()
    {
        return view('admin.vote_dpm.input', [
            'title' => 'Vote DPM',
        ]);
    }
    
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'foto' =>'image|file|max:5000',
           'nama' => 'required',
           'angkatan' => 'required',
           'prodi' => 'required',
       ]);
       if($request->file('foto')){
           $validatedData['foto'] = $request->file('foto')->store('post-images');
       }
       presma::create($validatedData);
       return redirect('admin-vote')->with('toast_success', 'data berhasil ditambahkan !');
    }
    
    #DPM
    public function store_dpm(Request $request2)
    {
       $validatedData = $request2->validate([
           'fotodpm' =>'image|file|max:5000',
           'namadpm' => 'required',
           'angkatandpm' => 'required',
           'prodidpm' => 'required',
       ]);
       if($request2->file('fotodpm')){
           $validatedData['fotodpm'] = $request2->file('fotodpm')->store('post-images-2');
       }
       dpm::create($validatedData);
       return redirect('admin-vote-dpm')->with('toast_success', 'data berhasil ditambahkan !');
    }
    
    public function edit($id)
    {
        $presma=presma::findorfail($id);
        return view('admin.vote.edit', compact('presma'));
    }
    
    #dpm
    public function edit2($id2)
    {
        $dpm=dpm::findorfail($id2);
        return view('admin.vote_dpm.edit', [
            'title' => 'Edit Vote DPM',
        ], compact('dpm'));
    }
    
    public function update(Request $request, $id)
    {
        $presma=presma::findorfail($id);
        $presma->update($request->all());
        return redirect('admin-vote')->with('success', 'updated!');
    }

    #DPM
    public function update2(Request $request2, $id2)
    {
        $dpm=dpm::findorfail($id2);
        $dpm->update($request2->all());
        return redirect('admin-vote-dpm')->with('success', 'updated!');
    }
    
    public function destroy($id)
    {
        $presma=presma::findorfail($id);
        $presma->delete();
        return back()->with('toast_success', 'data berhasil dihapus!');
    }
    
    #DPM
    public function destroy2($id2)
    {
        $dpm=dpm::findorfail($id2);
        $dpm->delete();
        return back()->with('toast_success', 'data berhasil dihapus!');
    }
    
    public function presmaexport()
    {
        return Excel::download(new VotingExport, 'voting.xlsx');
    }
    public function dpmexport()
    {
        return Excel::download(new DpmExport, 'dpm.xlsx');
    }
    
 
    
 }