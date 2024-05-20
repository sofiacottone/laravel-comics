<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    $navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];

    $data = [
        'comics' => $comics,
        'navLinks' => $navLinks,
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];

    $data = [
        'comics' => $comics,
        'navLinks' => $navLinks,
    ];
    return view('comics', $data);
})->name('comics');
