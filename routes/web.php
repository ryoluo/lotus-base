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
Route::get('/open/twitter', function() {
    return view('twitter');
});
Route::get('/open/instagram', function() {
    return view('instagram');
});
Route::get('/open/github', function() {
    return view('github');
});
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
