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
    return view('welcome');
});


//About our project

Route::get('/about', function () {
    return view('about');
});

Route::get('/add_article', function () {
    return view('add_article');
});

Route::post('/add_article', 'ArticleController@addArticle')->name('addarticle');


Route::get('/feed/{article}', 'ArticleController@show')->name('showarticle');

Route::get('/feed', 'ArticleController@showArticle');



Route::get('/feedback', function () {
    return view('/feedback');
})->middleware([]);

Route::post('/feedback', 'FeedbackController@Feedback')->name('feedback');
Route::get('/pattern', function () {
    return view('pattern');
})->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


