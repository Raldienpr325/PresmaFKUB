<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpsiController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VoteMainController;
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\DashboardMainController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CountdownController::class, 'countdowncontroller']);

Route::get('/opsi', [OpsiController::class, 'opsicontroller']);

Route::get('/login', [LoginController::class, 'logincontroller']);

// Route::get('/vote', [VoteController::class, 'votecontroller'])->name('vote');
Route::get('/vote', [VoteController::class, 'datavotepresma'])->name('vote');

Route::get('/admin-vote', [VoteMainController::class, 'votemaincontroller']);
Route::get('/create-vote', [VoteMainController::class, 'create']);
Route::get('/edit-vote/{id}', [VoteMainController::class, 'edit']);
Route::post('/update-vote/{id}', [VoteMainController::class, 'update']);
Route::get('/delete-vote/{id}', [VoteMainController::class, 'destroy']);
;
Route::get('/export-vote', [VoteMainController::class, 'presmaexport']);

Route::post('/simpan-vote', [VoteMainController::class, 'store']);

Route::get('/admin-dashboard', [DashboardMainController::class, 'dashboardmaincontroller']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handelGoogleCallback'])->name('google.callback');
// Route::get('auth/google', function(){
//     return Socialite::driver('google')->redirect();
// })->name('google.login');

// Route::get('auth/google/callback', function(){
//     try{
//         $user = Socialite::driver('google')->user();//('fadfadsf');
//         dd($user);
//         // $finduser = User::where('google_id',$user->getId())->first();
//     } catch (\Throwable $th) {

//     }
// });