<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/konten', function () {
    return view('layout.content');
});
Route::get('/account', function () {
    return view('layout.profile');
});
Route::get('/halpeserta', function () {
    return view('layout.peserta');
});
