<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/menu', [DaftarController::class,'index'])->name('daftar');
Route::post('/daftar/insert',[DaftarController::class,'insert']);
Route::get('/daftar/edit/{nodaftar}', [DaftarController::class,'edit']);
Route::post('/daftar/update/{nodaftar}',[DaftarController::class,'update']);
Route::get('/daftar/delete/{nodaftar}',[DaftarController::class,'delete']);
Route::get('/daftar/print',[DaftarController::class,'print']);
Route::get('/daftar/print/{nodaftar}',[DaftarController::class,'detail']);

