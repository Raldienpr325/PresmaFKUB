<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.loginadminevote');
    }

    public function adminlogin(Request $request){
       
        if($request['email'] == 'adminevote@example.com' && $request['password'] == '12345678' && $request['name'] == 'adminevote'){
            // Auth::login($cekakun);
            Auth::attempt($request->only('email', 'password'));
            return redirect('/admin-vote');
        } else {
            return redirect('/admin-login')->with('failedlogin', 'Data Tidak Sesuai ');
        }
    }

}