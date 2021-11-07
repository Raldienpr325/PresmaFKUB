<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handelGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            // dd($user);
            if( $user->user['hd'] === 'null'){
                $finduser = User::where('google_id',$user->getId())->first();
                if($finduser){
                    Auth::login($finduser);
                    return redirect()->intended('/');
                }
                else{
                    // dd($user);
                    $newUser = User::create([
                        'name' => $user->name,
                        // 'username' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'hd' => $user->user['hd'],
                        'password' => bcrypt('12345678'),
                    ]);
                    // dd($user);
                    Auth::login($newUser);
                    return redirect()->intended('/');
                }
            } else {
                return redirect('login')->with('failedlogin', 'Login Failed! Gunakan Email UB');
            }

        } catch (\Throwable $th) {

        }
    }
}
