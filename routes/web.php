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

Route::view('/articles', 'pages/articles', ['date' => Carbon::now()->format('jS F Y')]);

Route::view('/projects', 'pages/projects', ['date' => Carbon::now()->format('jS F Y')]);
