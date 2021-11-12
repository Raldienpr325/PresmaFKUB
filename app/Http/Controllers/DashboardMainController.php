<?php

namespace App\Http\Controllers;

use App\Models\dpm;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use App\Models\voting;
use App\Models\presma;
use App\Models\voting2;

class DashboardMainController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('ceklevel:admin');
    }
    
    public function dashboardmaincontroller(){
        
       
    }
    public function dashboardmaincontroller2(){
       $title = 'hasil voting Dpm';
       $dpm = dpm::get();
       $hasil = [];
       
       foreach ($dpm as $key => $d){
           $id_dpm = $d->id;    
           $no_urut = $d->no_urut;
           $total = voting2::where('dpmsid',$id_dpm)->count();
           $a['name'] = $no_urut;
           $a['y'] = $total;
           array_push($hasil,$a);
           
       }
       return view('admin.hasil-dpm.main',compact('title','hasil'));
    }
}