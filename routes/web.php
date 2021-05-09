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
    return view('public.post.index');
});

Route::get('/post/1/detail', function () {
    return view('public.post.detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
