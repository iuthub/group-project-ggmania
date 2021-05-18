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

Route::get(' ', function () {
    return view('welcome');
});
//About our project

Route::get('/about', function () {
    return view('about');
});

Route::get('/add_article', function () {
    return view('add_article');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/feed', 'ArticleController@showArticle');

Route::post('/add_article', 'ArticleController@addArticle')->name('addarticle');
