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

// Home
Route::get('/', function () {
    $comics = config('comic-data');

    return view('home', [
        'comics' => $comics,
    ]);
})->name('home');

// News
Route::get('/news', function () {
    return view('news');
})->name('news');

// Comics Details
Route::get('/comic-detail/{id}', function ($id) {
    $comics = config('comic-data');
    // dump($comics, $id);

    // Check id
    if(is_numeric($id) && $id >= 0 && $id < count($comics) ) {
        // dump('get comics');
        $comic = $comics[$id];
    } else {
        abort(404);
    }
    return view('comic-detail', [
        'comic' => $comic,
    ]);
})->name('comic-detail');
