<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);
 Route::resource('home', \App\Http\Controllers\HomeController::class);
 Route::resource('about', \App\Http\Controllers\AboutController::class);
 Route::resource('layanan', \App\Http\Controllers\LayananController::class);
 Route::resource('kontak', \App\Http\Controllers\KontakController::class);
 Route::resource('portofolio', \App\Http\Controllers\PortofolioController::class);
 Route::resource('portofoliokremo', \App\Http\Controllers\PortofolioKremoController::class);
