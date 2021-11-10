<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMainController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('ceklevel:admin');
    }
    
    public function dashboardmaincontroller(){
        return view('admin.hasil.main', [
            'title' => 'Hasil Vote',
        ]);
    }
}