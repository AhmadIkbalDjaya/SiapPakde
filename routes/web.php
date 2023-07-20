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

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('profile', fn () => view('pages.profile'))->name('profile');
Route::get('bumdes', fn () => view('pages.profile'))->name('bumdes');
Route::get('kelembagaan', fn () => view('pages.profile'))->name('kelembagaan');
Route::get('kawasan', fn() => view('pages.profile'))->name('kawasan');
Route::get('publikasi', fn() => view('pages.profile'))->name('publikasi');
