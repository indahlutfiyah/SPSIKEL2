<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasidangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaaController;
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
// Route::get('/penjadwalan', function () {
//     return view('jadwal');
// });

// Route::get('/datasidang', [DatasidangController::class, 'index'] );

Route::get('/datasidang','App\Http\Controllers\DatasidangController@index');
Route::get('/printdatasidang', [DatasidangController::class, 'printdatasidang'] );
Route::get('/createdatasidang','App\Http\Controllers\DatasidangController@tambah');
Route::post('/datasidang/store','App\Http\Controllers\DatasidangController@store');
Route::get('/editdatasidang{ID_SIDANG}','App\Http\Controllers\DatasidangController@edit');
Route::post('/datasidang/update','App\Http\Controllers\DatasidangController@update');
Route::get('/datasidang/cari','App\Http\Controllers\DatasidangController@cari');

Route::get('/pengajuanhonor','App\Http\Controllers\PengajuanhonorController@index');
Route::get('/createpengajuan','App\Http\Controllers\PengajuanhonorController@tambah');
Route::post('/pengajuanhonor/store','App\Http\Controllers\PengajuanhonorController@store');

Route::get('/laporanpkl','App\Http\Controllers\LaporanpklController@index');
Route::get('/createlaporan','App\Http\Controllers\LaporanpklController@tambah');
Route::post('/store','App\Http\Controllers\LaporanpklController@store');
Route::get('/editlaporan{ID_SIDANG}','App\Http\Controllers\laporanpklController@edit');
Route::post('/laporanpkl/update','App\Http\Controllers\laporanpklController@update');

Route::get('/paa',[PaaController::class,'index'] );
Route::get('/paa/create',[PaaController::class,'create']) ;

Route::get('/login', [LoginController::class, 'login'] );
Route::post('/login', [LoginController::class, 'authenticate'] );
Route::get('/logout', [LoginController::class, 'logout'] );

?>