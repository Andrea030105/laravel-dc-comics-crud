<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomePages;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePages::class, 'index'])->name('home-page');

Route::resource('comics', ComicController::class);
