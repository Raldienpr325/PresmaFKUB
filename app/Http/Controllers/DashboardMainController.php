<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use App\Models\voting;
use App\Models\presma;

class DashboardMainController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('ceklevel:admin');
    }
    
    public function dashboardmaincontroller(){
        
       $title = 'hasil voting presma';
       $presma = presma::get();
       $hasil = [];
       
       foreach ($presma as $key => $ps){
           $id_presma = $ps->id;    
           $no_urut = $ps->no_urut;
           $total = voting::where('presmasid',$id_presma)->count();
           $a['name'] = $no_urut;
           $a['y'] = $total;
           array_push($hasil,$a);
           
       }
       return view('admin.hasil-presma.main',compact('title','hasil'));
    }
    public function dashboardmaincontroller2(){
        $title = 'hasil voting DPM';
        return view('admin.hasil-dpm.main',compact('title'));
    }
}