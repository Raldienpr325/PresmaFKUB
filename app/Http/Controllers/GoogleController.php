<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            if( $user->user['locale'] == 'id'){
                return redirect('login')->with('failedlogin', 'Login Failed! Gunakan Email UB');
                exit;
            }
            else if( $user->user['locale'] == 'en' ){
            $finduser = User::where('google_id',$user->getId())->first();
            if($finduser){
                $leveluser = DB::table('users')->where('google_id', $user->getId())->value('level');
                if($leveluser == 'superuser'){
                    DB::table('users')
                    ->where('google_id', $user->getId())
                    ->update(['level' => 'user']);
                    Auth::login($finduser);
                    return redirect()->intended('/');
                }
                else{
                Auth::login($finduser);
                return redirect()->intended('/');
                }
            }
            else{
                // dd($user);
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'locale' => $user->user['locale'],
                    'password' => bcrypt('12345678'),
                    'level' => 'user',
                    'detik' => strtotime('now')
                ]);
                // dd($user);
                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } else {
            return redirect('/login');
        }
        } catch (\Throwable $th) {

        }
    }
}