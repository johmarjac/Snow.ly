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

Route::domain('admin.snowly.dev')->group(function ()
{
    Route::get('/', 'AdminPageController@index');
});

Route::get('/', 'PostController@index'); //temporary
Route::get('blog', 'PostController@index');
Route::post('blog', 'PostController@store');
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::get('search', 'SearchController@filter');
Route::view('projects', 'pages/projects');
Route::view('contact', 'pages/contact');
Route::view('about', 'pages/about');
