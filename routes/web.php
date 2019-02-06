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
Route::get('/questionnaire', 'SectionsController@index');
//post can become better (removing section and adding a hidden value on forms)
Route::post('/questionnaire/{section}/create', "SectionsController@store");
Route::get('/questionnaire/create', 'SectionsController@create');
Route::post('/questionnaire/create2', 'SectionsController@store2');
Route::post('/questionnaire/create_question', 'QuestionsController@create');
Route::post('/questionnaire/create_option', 'OptionsController@create');
Route::get('/questionnaire/edit', 'SectionsController@search');