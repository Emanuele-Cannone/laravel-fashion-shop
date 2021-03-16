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
    return view('home');
})->name('pagina_home');

Route::get('/prodotti', function () {
    return view('products');
})->name('pagina_prodotti');

Route::get('/storia', function () {
    return view('story');
})->name('pagina_storia');
