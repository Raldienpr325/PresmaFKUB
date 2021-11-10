<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        // $user = Auth::user();

        // if($user->level == $roles)
        //     return $next($request);


        // return redirect('login')->with('error',"kamu gak punya akses");
        if ( in_array($request->user()->level,$roles)){
            return $next($request);
        }
        return redirect('/admin-login');
    }
}
