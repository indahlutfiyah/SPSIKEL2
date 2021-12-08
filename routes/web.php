<?php

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

// Route::get('/', function () {
//     return view('layout.navbar');
// });
Route::get('/', function () {
    return view('login');
});
Route::get('/spengajuan', function () {
    return view('spengajuan');
});
Route::get('/penjadwalan', function () {
    return view('penjadwalan');
});