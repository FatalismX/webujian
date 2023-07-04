<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\PesertaController;

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

Route::get('/', [UjianController::class, 'beranda']);

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'loginAuth'])->name('login.auth');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('ujian', [UjianController::class, 'index'])->name('ujian');
    Route::get('/ujian/create', [UjianController::class, 'create'])->name('ujian.create');
    Route::post('ujian', [UjianController::class, 'store'])->name('ujian.store');
    Route::get('/ujian/edit/{id}', [UjianController::class, 'edit'])->name('ujian.edit');
    Route::post('/ujian/update/{id}', [UjianController::class, 'update'])->name('ujian.update');
    Route::delete('ujian/{id}', [UjianController::class, 'destroy'])->name('ujian.destroy');

    Route::get('peserta', [PesertaController::class, 'index'])->name('peserta');
    Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('peserta', [PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::post('/peserta/update/{id}', [PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');
});
