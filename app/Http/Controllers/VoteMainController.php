<?php

namespace App\Http\Controllers;

use App\Exports\DpmExport;
use App\Exports\VotingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\presma;
use App\Models\dpm;
use App\Models\voting;
use App\Models\voting2;
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
        $voting = voting::paginate(4000);
        return view('admin.proses-presma.main', [
            'title' => 'Proses Vote Presma',
        ], compact('voting'));
    }
    

    #CHART PRESMA
    public function hasilvoting()
    {
        $hvoting = voting::paginate(100);
        $title = 'hasil voting presma';
        $presma = presma::get();
        $Perolehan_suara = [];
        
       foreach ($presma as $key => $ps){
           $id_presma = $ps->id;  
           $nama_presma = $ps->nama;  
           $total = voting::where('presmasid',$id_presma)->count();
           
           $a['name'] = $nama_presma;
           $a['y'] = $total;
           array_push($Perolehan_suara,$a);
           
       }
       return view('admin.hasil-presma.main',compact('title','Perolehan_suara'));
    }
    #CHART DPM
    public function hasilvoting2()
    {
        $hvoting2 = voting2::paginate(4000);
        $title = 'hasil voting Dpm';
        $dpm = dpm::get();
        $hasil2 = [];
        
        foreach ($dpm as $key => $d){
            $id_dpm = $d->id;    
            $nama_dpm = $d->namadpm;
            $total = voting2::where('dpmsid',$id_dpm)->count();
            $a2['name'] = $nama_dpm;
            $a2['y'] = $total;
            array_push($hasil2,$a2);
            
        }
        return view('admin.hasil-dpm.main',compact('title','hasil2'));
    }
    
    public function voting2() {
        $pemilihdpm = voting2::latest();
        
        if(request('search')){
            $pemilihdpm->where('user-NIM','like','%'.request('search').'%')
                       ->orWhere('user-name','like','%'.request('search').'%');
        }
        $voting2 = voting2::paginate(4000);
        return view('admin.proses-dpm.main', [
            'title' => 'Proses Vote Presma',
            'user-NIM' => $pemilihdpm->get(),
            'user-name' =>$pemilihdpm->get()
        ], 
        compact('voting2'));
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
           'nourut' => 'required',
       ]);
       if($request->file('foto')){
           $validatedData['foto'] = $request->file('foto')->store('post-images');
       }
       presma::create($validatedData);
       return redirect('admin-vote')->with('success', 'data berhasil ditambahkan !');
    }
    
    #DPM
    public function store_dpm(Request $request2)
    {
       $validatedData = $request2->validate([
           'fotodpm' =>'image|file|max:5000',
           'namadpm' => 'required',
           'angkatandpm' => 'required',
           'prodidpm' => 'required',
           'nourutdpm' => 'required',
       ]);
       if($request2->file('fotodpm')){
           $validatedData['fotodpm'] = $request2->file('fotodpm')->store('post-images-2');
       }
       dpm::create($validatedData);
       return redirect('admin-vote-dpm')->with('success', 'data berhasil ditambahkan !');
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