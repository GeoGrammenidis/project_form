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
/*
Route::get('/', function () {
    return view('parts/index');
});
Route::get('/general', function () {
    return view('parts/general');
});
Route::get('/favourites', function () {
    return view('parts/favourites');
});*/
Route::get('/', 'SectionsController@index');