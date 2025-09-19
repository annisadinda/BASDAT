<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('profile'))->name('profile');

Route::get('/skills', fn() => view('skills'))->name('skills');
Route::get('/riwayat', fn() => view('riwayat'))->name('riwayat');
Route::get('/organisasi', fn() => view('organisasi'))->name('organisasi');
Route::get('/kepanitiaan', fn() => view('kepanitiaan'))->name('kepanitiaan');
Route::get('/hobby', fn() => view('hobby'))->name('hobby');
Route::get('/gallery', fn()=>view('gallery'))->name('gallery');



