<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.loginadminevote');
    }

    public function adminlogin(Request $request){
        // return dd(request('name'));
        // $finduser = User::where('email', request('email'));
        // return dd($_POST);
        // $newUser = [
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'google_id' => request('google_id'),
        //     'locale' => request('locale'),
        //     'password' => request('password'),
        //     'level' => request('level'),
        // ];
        // $newUser = $_POST->user();
        // $finduser = User::where('google_id', $newUser->getId())->first();
        // if($finduser){
        //     // Auth::login($newUser);
        //     Auth::login($finduser);
        //     return redirect()->intended('/');
        // }
        // else{
        //     return redirect('/admin-login')->with('failedlogin', 'Data yang anda Masukkan salah');
        // }
        // return dd($request->all());
            if (Auth::attempt($request->only('email', 'password'))){
                return redirect('/admin-dashboard');
            }
    }

}
