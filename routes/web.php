<?php

use App\Http\Controllers\User\BumdesController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\KawasanController;
use App\Http\Controllers\User\KelembagaanController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PublikasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('profile/{desa:slug}', [ProfileController::class, 'show'])->name('profile.desa');
Route::get('bumdes', [BumdesController::class, 'index'])->name('bumdes');
Route::get('bumdes/{desa:slug}', [BumdesController::class, 'show'])->name('bumdes.desa');
Route::get('kelembagaan', [KelembagaanController::class, 'index'])->name('kelembagaan');
Route::get('kelembagaan/{desa:slug}', [KelembagaanController::class, 'show'])->name('kelembagaan.desa');
Route::get('kawasan', [KawasanController::class, 'index'])->name('kawasan');
Route::get('kawasan/{desa:slug}', [KawasanController::class, 'show'])->name('kawasan.desa');
Route::get('publikasi', [PublikasiController::class, 'index'])->name('publikasi');
Route::get('publikasi/{desa:slug}', [PublikasiController::class, 'show'])->name('publikasi.desa');

Route::prefix('sapa-admin')->group(function () {
  Route::get('', fn() => view('pages.admin.dashboard'))->name('admin.dashboard');
  Route::get('desa', fn() => view('pages.admin.desa'))->name('admin.desa');
  Route::get('desa/namaDesa', fn()=>view('pages.admin.desa_detail'))->name('admin.desa.detail');
});