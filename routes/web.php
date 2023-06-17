<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\HomeController;

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

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');

Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');

Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');

Route::get('/jabatan/{jabatan}/edit', [JabatanController::class, 'edit'])->name('jabatan.edit');

Route::put('/jabatan/{jabatan}', [JabatanController::class, 'update'])->name('jabatan.update');

Route::delete('/jabatan/{jabatan}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/home/home',  [HomeController::class, 'home']);

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');

Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');

Route::get('/karyawan/{karyawan}', [KaryawanController::class, 'show'])->name('karyawan.show');

Route::get('/karyawan/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');

Route::put('/karyawan/{karyawan}', [KaryawanController::class, 'update'])->name('karyawan.update');

Route::delete('/karyawan/{karyawan}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
