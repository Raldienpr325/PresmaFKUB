<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMainController extends Controller
{
    //
    public function __construct()
    {

    }
    
    public function dashboardmaincontroller(){
        return view('admin.dashboard.main');
    }
}
