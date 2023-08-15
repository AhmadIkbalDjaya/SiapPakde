<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContorller;
use App\Http\Controllers\DesaAdminController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BumdesController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PublikasiController;
use App\Http\Controllers\Admin\AdminDesaController;
use App\Http\Controllers\User\KelembagaanController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminKawasanController;
use App\Http\Controllers\Admin\AdminMasterDataContoller;
use App\Http\Controllers\KecAdminController;
use App\Http\Controllers\User\KawasanController;

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
Route::get('publikasi', [PublikasiController::class, 'index'])->name('publikasi');
Route::get('publikasi/{desa:slug}', [PublikasiController::class, 'show'])->name('publikasi.desa');
Route::get('kawasan', [KawasanController::class, 'index'])->name('kawasan');
Route::get('kawasan/{desa:slug}', [KawasanController::class, 'show'])->name('kawasan.desa');

Route::middleware(['auth', 'admin'])->group(function () {
  Route::prefix('sapa-admin')->group(function () {
    Route::get('', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('desa', [AdminDesaController::class, 'index'])->name('admin.desa');
    Route::get('desa/{desa:slug}', [AdminDesaController::class, 'show'])->name('admin.desa.show');
    Route::get('admin-desa', [AdminAccountController::class, 'desa'])->name('admin.desa-admin');
    Route::get('admin-kec', [AdminAccountController::class, 'kecamatan'])->name('admin.kec-admin');
    Route::get('kecamatan', [AdminMasterDataContoller::class, 'kecamatan'])->name('admin.kecamatan');
    Route::get('kategori-kawasan', [AdminMasterDataContoller::class, 'kategoriKawasan'])->name('admin.kategori-kawasan');
  });
});

Route::middleware(['auth', 'admin-kecamatan'])->group(function () {
  Route::prefix('kec-admin')->group(function () {
    Route::controller(KecAdminController::class)->group(function () {
      Route::get('', 'index')->name('kec-admin.dashboard');
      Route::get('desa', 'desa')->name('kec-admin.desa');
      Route::get('desa/{desa:slug}', 'desaShow')->name('kec-admin.desa.show');
      Route::get('admin-desa', 'adminDesa')->name('kec-admin.desa-admin');
    });
  });
});

Route::middleware(['auth', 'admin-desa'])->group(function () {
  Route::prefix('desa-admin')->group(function () {
    Route::controller(DesaAdminController::class)->group(function () {
      Route::get('', 'index')->name('desa-admin.dashboard');
      Route::get('profile', 'profile')->name('desa-admin.profile');
      Route::get('perangkat-desa', 'perangkatDesa')->name('desa-admin.perangkat-desa');
      Route::get('bumdes', 'bumdes')->name('desa-admin.bumdes');
      Route::get('kelembagaan', 'kelembagaan')->name('desa-admin.kelembagaan');
      Route::get('publikasi', 'publikasi')->name('desa-admin.publikasi');
      Route::get('kawasan', 'kawasan')->name('desa-admin.kawasan');
    });
  });
});

Route::get('login', [LoginContorller::class, 'index'])->name('login')->middleware('not-login');
Route::post('authenticate', [LoginContorller::class, 'authenticate'])->name('authenticate')->middleware('not-login');
Route::get('logout', [LoginContorller::class, 'logout'])->name('logout')->middleware('auth');
