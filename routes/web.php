<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpsiController;
use App\Http\Controllers\VoteController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CeknimController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VoteMainController;
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\DashboardMainController;
use App\Http\Controllers\AdminLoginController;

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
Route::get('/', [CountdownController::class, 'countdowncontroller'])->middleware('guest');
Route::get('/opsi', [OpsiController::class, 'opsicontroller'])->middleware('guest');
Route::get('/login', [LoginController::class, 'logincontroller'])->name('login')->middleware('guest');
Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/adminlogindata', [AdminLoginController::class, 'adminlogin'])->name('loginadmin')->middleware('guest');


//khusus user
// Route::get('/vote', [VoteController::class, 'datavotepresma'])->name('vote')->middleware('auth');//->middleware('CekNim');

//khusus admin
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handelGoogleCallback'])->name('google.callback');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekLevel:admin']], function () {
        /*
        Route Khusus untuk role admin
    	*/
        Route::get('/admin-vote', [VoteMainController::class, 'votemaincontroller']);
        Route::get('/create-vote', [VoteMainController::class, 'create']);
        Route::get('/edit-vote/{id}', [VoteMainController::class, 'edit']);
        Route::post('/update-vote/{id}', [VoteMainController::class, 'update']);
        Route::get('/delete-vote/{id}', [VoteMainController::class, 'destroy']);
        Route::get('/export-vote', [VoteMainController::class, 'presmaexport']);
        Route::post('/simpan-vote', [VoteMainController::class, 'store']);
        Route::get('/admin-dashboard', [DashboardMainController::class, 'dashboardmaincontroller']);
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['CekLevel:user']], function () {
        /*
        Route Khusus untuk role user
    	*/
        Route::get('/home', [VoteController::class, 'datavotepresma'])->name('home');//->middleware('auth');
        Route::get('/user.done-vote/{id}', [VoteController::class, 'vote'])->name('done');//->middleware('auth');
        Route::get('/halaman-ceknim', [CeknimController::class, 'index']);//->middleware('auth');
        Route::post('/ceknim', [CeknimController::class, 'store'])->name('ceknim');//->middleware('auth');
        Route::resource('editor', AdminController::class);
    });
});