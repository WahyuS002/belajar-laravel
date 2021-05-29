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

/*
    FRONTEND
*/
Route::get('/', function () {
    return view('public.post.index');
})->name('post.index');

Route::get('/post/1/detail', function () {
    return view('public.post.detail');
})->name('post.detail');

/*
    AUTHENTICATION
*/
Auth::routes();

/*
    BACKEND
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
