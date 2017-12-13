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

Route::get('/', 'PostsController@index')->name('posts');

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');

Route::post('/posts', 'PostsController@store')->name('postStore');
Route::get('/posts/create', 'PostsController@create')->name('postCreate');
Route::get('/posts/{post}', 'PostsController@show')->name('postShow');
