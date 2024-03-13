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
    $comics_db = config('comics');
    $icons  = [
        ['name' => 'digital comics', 'path' => 'resources/img/buy-comics-digital-comics.png'],
        ['name' => 'dc merchandise', 'path' => 'resources/img/buy-comics-merchandise.png'],
        ['name' => 'subscription', 'path' => 'resources/img/buy-comics-subscriptions.png'],
        ['name' => 'comic shop locator', 'path' => 'resources/img/buy-comics-shop-locator.png'],
        ['name' => 'dc power visa', 'path' => 'resources/img/buy-dc-power-visa.svg']
    ];
    return view('home', compact('navbar_voices', 'comics_db', 'icons'))->with('active_page', 'comics');
})->name('comics');
