<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\OpsiController;
use App\Http\Controllers\User\VoteController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\Admin\VoteMainController;
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\Admin\DashboardMainController;

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

Route::get('/vote', [VoteController::class, 'votecontroller']);

Route::get('/admin-vote', [VoteMainController::class, 'votemaincontroller']);
Route::get('/create-vote', [VoteMainController::class, 'create']);
Route::post('/simpan-vote', [VoteMainController::class, 'store']);

Route::get('/admin-dashboard', [DashboardMainController::class, 'dashboardmaincontroller']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');