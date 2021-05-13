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
    // $dataArticles = config('comics');
    // $pageActive = 'comics';
    return view('home')->with('articles', config('comics'));
})->name('home');

Route::get('/details/{id}', function ($id) {
    $dataArticles = config('comics');
    // $pageActive = 'comics';
    return view('details')->with('article', $dataArticles[$id]);
})->name('details');


// ->with('namePage','comics')
//
// ->with('namePage','details')
