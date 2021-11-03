<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpsiController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VoteMainController;
use App\Http\Controllers\CountdownController;
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

Route::get('/', function () {
    return view('main');
});
Route::get('/opsi', function () {
    return view('user.opsi');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/vote', function () {
    return view('user.vote');
});
Route::get('/admin-vote', function () {
    return view('admin.vote.main');
});
Route::get('/admin', function () {
    return view('admin.dashboard.main');
});