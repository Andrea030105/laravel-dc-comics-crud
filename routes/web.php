<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    $comics = config('db.comics');
    $header_menu = config('db.menu');
    $footer_menu = config('db.footerMenu');

    return view('index', compact('comics', 'header_menu', 'footer_menu'));
}); */

Route::get('/', [HomePage::class, 'index'])->name('home-page');

/* Route::get('index/{titolo}', function ($titolo) {

    $header_menu = config('db.menu');
    $footer_menu = config('db.footerMenu');

    $comics = config('db.comics');
    foreach ($comics as $comic) {
        if ($comic['title'] == $titolo) {
            $detail_comic = $comic;
        }
    }
    return view('partials/comic', compact('header_menu', 'footer_menu', 'detail_comic'));
})->name('detail-comic'); */

Route::get('index/{id}', [ComicController::class, 'show'])->name('detail-comic');
