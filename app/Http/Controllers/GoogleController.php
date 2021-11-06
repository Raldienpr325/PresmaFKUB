<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handelGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            // $finduser = User::where('google_id',$user->getId())->first();
        } catch (\Throwable $th) {

        }
    }
}
