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

Route::get('/', function () {
    $navbar_voices = ['characters', 'comics', 'movies', 'tv', 'games', 'collectables', 'videos', 'fans', 'news', 'shop'];
    return view('home', compact('navbar_voices'))->with('active_page', 'comics');
})->name('comics');
