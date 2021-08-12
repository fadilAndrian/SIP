<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DataPegawai;
use App\Http\Livewire\CreatePegawai;
use App\Http\Livewire\CutiAjukan;
use App\Http\Livewire\Login;


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
//     return view('welcome');
// });

Route::group(['middleware'=>['auth', 'cekrole:admin']], function(){
	//
});

Route::group(['middleware'=>['auth', 'cekrole:pegawai']], function(){
	//
});

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/data-pegawai', DataPegawai::class);
Route::get('/create-pegawai', CreatePegawai::class);
Route::get('/ajukan-cuti', CutiAjukan::class);