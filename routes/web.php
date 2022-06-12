<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\DatasiswaController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/ceklogin', [AuthController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'level:admin'])->group(function () {
    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
    Route::get('/jumlah', [MainController::class, 'jumlah'])->name('jumlah');
    Route::get('/datatabel', [MainController::class, 'datatabel'])->name('datatabel');

    Route::get('/form_siswa', [DatasiswaController::class, 'form_siswa'])->name('form_siswa');
    Route::get('/aktif', [DatasiswaController::class, 'index'])->name('aktif');
    Route::get('/validasi', [DatasiswaController::class, 'validasi'])->name('validasi');
    Route::get('/nonaktif', [DatasiswaController::class, 'nonaktif'])->name('nonaktif');

    Route::get('/rombel', [RombelController::class, 'index'])->name('rombel');

    Route::get('/manage', [UserController::class, 'index'])->name('manage');
});
