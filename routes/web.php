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
Route::get('/open/en2web', function() {
    return view('en2web');
});
Route::get('/open/gsskt', function() {
    return view('gsskt');
});
Route::get('/{any}', function () {
    $title = "test: Lotus Base";
    if (request()->path() === 'about') {
        $title = "test: About - {$title}";
    };
    return view('app', compact('title'));
})->where('any', '.*');
