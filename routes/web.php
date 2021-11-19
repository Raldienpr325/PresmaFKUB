<?php

use App\Http\Controllers\TokenUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpsiController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CeknimController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VoteMainController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardMainController;

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

// Route::get('/vote', [VoteController::class, 'votecontroller'])->name('vote');
Auth::routes();


//khusu guest
Route::get('/', [OpsiController::class, 'opsicontroller'])->middleware('guest');
Route::get('/login', [LoginController::class, 'logincontroller'])->name('login');//->middleware('guest');
Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/adminlogindata', [AdminLoginController::class, 'adminlogin'])->name('loginadmin')->middleware('guest');
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login')->middleware('guest');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handelGoogleCallback'])->name('google.callback')->middleware('guest');
Route::get('/halaman-logintoken', [TokenUserController::class, 'index'])->name('halaman-logintoken')->middleware('guest');
Route::post('/cek-token', [TokenUserController::class, 'cektoken'])->name('cektoken')->middleware('guest');
Route::post('/pesan-masalah', [TokenUserController::class, 'kirimpesanmasalah'])->name('usertambahan')->middleware('guest');
Route::get('/user-service', [TokenUserController::class, 'halamanusertambahan'])->name('user-service')->middleware('guest');

Route::get('/halaman-last-session', [LoginController::class, 'logincontroller'])->name('relogin')->middleware('guest');



Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekLevel:admin']], function () {
        /*
        Route Khusus untuk role admin
    	*/
        
        Route::get('/admin-vote-dpm', [VoteMainController::class, 'votedpmcontroller']);
        Route::get('/create-vote-dpm', [VoteMainController::class, 'create_dpm']);
        Route::get('/edit-vote-dpm/{id}', [VoteMainController::class, 'edit2']);
        Route::post('/update-vote-dpm/{id}', [VoteMainController::class, 'update2']);
        Route::get('/delete-vote-dpm/{id}', [VoteMainController::class, 'destroy2']);
        Route::post('/simpan-vote-dpm', [VoteMainController::class, 'store_dpm']);
        Route::get('/admin-proses-presma', [VoteMainController::class, 'voting']);
        Route::get('/admin-proses-dpm', [VoteMainController::class, 'voting2']);
        Route::get('/admin-hasil-presma', [VoteMainController::class, 'hasilvoting']);
        Route::get('/admin-hasil-dpm', [VoteMainController::class, 'hasilvoting2']);
        Route::get('/cari-pemilih-dpm', [VoteMainController::class, 'caripemilihdpm'])->name('caripemilihdm');
        Route::get('/cari-pemilih-presma', [VoteMainController::class, 'caripemilihpresma'])->name('caripemilihpresma');
        
        
        Route::get('/admin-vote', [VoteMainController::class, 'votemaincontroller']);
        Route::get('/create-vote', [VoteMainController::class, 'create']);
        Route::get('/edit-vote/{id}', [VoteMainController::class, 'edit']);
        Route::post('/update-vote/{id}', [VoteMainController::class, 'update']);
        Route::get('/delete-vote/{id}', [VoteMainController::class, 'destroy']);
        Route::get('/export-proses-presma', [VoteMainController::class, 'presmaexport']);
        Route::get('/export-proses-dpm', [VoteMainController::class, 'dpmexport']);
        Route::get('/hasil-vote', [VoteMainController::class, 'grafik']);
        Route::post('/simpan-vote', [VoteMainController::class, 'store']);
        Route::resource('admin', AdminController::class);
    });
    
    
    Route::group(['middleware' => ['CekLevel:user']], function () {
        /*
        Route Khusus untuk role user
    	*/
        Route::post('/ceknim', [CeknimController::class, 'store'])->name('ceknim');//->middleware('auth');
        Route::get('/halaman-ceknim', [CeknimController::class, 'index']);//->middleware('auth');
        Route::get('/home', [VoteController::class, 'datavotepresma'])->name('home');//->middleware('auth');
        Route::resource('editor', AdminController::class);
    });
    
    Route::group(['middleware' => ['CekLevel:superuser']], function () {
        /*
        Route Khusus untuk role superuser
        */
        Route::get('/vote-presma', [VoteController::class, 'datavotepresma'])->name('vote');//->middleware('auth');
        Route::get('/vote-dpm', [VoteController::class, 'datavotedpm'])->name('vote2');//->middleware('auth');
        Route::get('/home', [App\Http\Controllers\VoteController::class, 'datavotepresma']);//->name('home')->middleware('auth');
        Route::get('/user.done-vote/{usersid}/{name}', [App\Http\Controllers\VoteController::class, 'vote']);//->name('done')->middleware('auth');
        Route::get('/user.done-vote2/{usersid}/{name}', [App\Http\Controllers\VoteController::class, 'vote2']);//->name('done')->middleware('auth');
    });
});