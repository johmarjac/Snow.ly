<?php

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

use Carbon\Carbon;

Route::view('/', 'pages/blog', ['date' => Carbon::now()->format('jS F Y')]); // date temporary for tests obviously

Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{article}', 'ArticleController@show');

Route::view('/projects', 'pages/projects', ['date' => Carbon::now()->format('jS F Y')]);

Route::view('/contact', 'pages/contact', ['date' => Carbon::now()->format('jS F Y')]);

Route::view('/about', 'pages/about', ['date' => Carbon::now()->format('jS F Y')]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
