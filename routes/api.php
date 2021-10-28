<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/token', 'ContactController@getToken');
Route::post('/contact/submit', 'ContactController@submitMessage');

Route::get('/posts/index', 'PostsController@index')->name('post.index');
Route::get('/posts/{post}', 'PostsController@show')->name('post.show');
