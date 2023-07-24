<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('pages.user.home'))->name('home');
Route::get('profile', fn () => view('pages.user.profile'))->name('profile');
Route::get('profile/namaDesa', fn () => view('pages.user.profile_desa'))->name('profile.desa');
Route::get('bumdes', fn () => view('pages.user.bumdes'))->name('bumdes');
Route::get('bumdes/namaDesa', fn () => view('pages.user.bumdes_desa'))->name('bumdes.desa');
Route::get('kelembagaan', fn () => view('pages.user.kelembagaan'))->name('kelembagaan');
Route::get('kelembagaan/namaDesa', fn () => view('pages.user.kelembagaan_desa'))->name('kelembagaan.desa');
Route::get('kawasan', fn() => view('pages.user.profile'))->name('kawasan');
Route::get('publikasi', fn() => view('pages.user.profile'))->name('publikasi');
