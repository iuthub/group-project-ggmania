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
})->name('welcome')->middleware('guest');


//About our project

Route::get('/about', function () {
    return view('about');
})->middleware(['auth']);

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth']);

Route::get('page', function () {
    echo 'hi';
});

Route::get('/add_article', function () {
    return view('add_article');
})->middleware(['auth']);

Route::post('/add_article', 'ArticleController@addArticle')->name('addarticle')->middleware(['auth']);


Route::get('/feed/{article}', 'ArticleController@show')->name('showarticle')->middleware(['auth']);

Route::get('/feed', 'ArticleController@showArticle')->middleware(['auth']);

Route::get('/delete/{id}', 'ArticleController@delete')->middleware(['auth']);

Route::get('/feedback', function () {
    return view('/feedback');
});

Route::post('/feedback', 'FeedbackController@Feedback')->name('feedback');

Route::get('/pattern', function () {
    return view('pattern');
})->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test', 'ArticleController@test');



require __DIR__. '/auth.php';


