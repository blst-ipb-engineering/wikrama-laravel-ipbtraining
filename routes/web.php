<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tambah_data_controller;
use App\Http\Controllers\PerspektifController;
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
    return view('welcome');
});

Route::get('/ipp', [PerspektifController::class, 'index'])->name('ipp');
Route::view('/ipt', 'ipr')->name('ipt');
Route::view('/ipr', 'ipr')->name('ipr');
Route::post('/perspektif', [PerspektifController::class, 'store']);
Route::post('/sasaran','SasaranController@store');
