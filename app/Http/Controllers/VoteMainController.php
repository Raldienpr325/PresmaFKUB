<?php

namespace App\Http\Controllers;
use App\Exports\PresmaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\presma;
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
        return view('admin.vote.main', compact('dtvote'));
    }
    public function create()
    {
        return view('admin.vote.input');
    }
    
    public function store(Request $request)
    {
        // dd($request)->all();
       $validatedData = $request->validate([
           'foto' =>'image|file|max:2000',
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
    public function edit($id)
    {
        $presma=presma::findorfail($id);
        return view('admin.vote.edit', compact('presma'));
    }
    public function update(Request $request, $id)
    {
        $presma=presma::findorfail($id);
        $presma->update($request->all());
        return redirect('admin-vote')->with('success', 'updated!');
    }
    public function destroy($id)
    {
        $presma=presma::findorfail($id);
        $presma->delete();
        return back()->with('toast_success', 'data berhasil dihapus!');
    }
    public function presmaexport()
    {
        return Excel::download(new PresmaExport, 'presma.xlsx');
    }
 }