<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    $menuItems = config('navmenulinks.menuItems');
    return view('comics', ['menuItems' => $menuItems]);
})->name('comics');

Route::get('/characters', function () {
    return 'Characters';
})->name('characters');


Route::get('/movies', function () {
    return 'Movies';

})->name('movies');

Route::get('/tv', function () {
    return 'tv';

})->name('tv');

Route::get('/games', function () {
    return 'games';

})->name('games');

Route::get('/collectibles', function () {
    return 'collectibles';
    ;
})->name('collectibles');

Route::get('/videos', function () {
    return 'videos';

})->name('videos');

Route::get('/fans', function () {
    return 'fans';

})->name('fans');

Route::get('/news', function () {
    return 'news';

})->name('news');

Route::get('/shop', function () {
    return 'shop';

})->name('shop');

