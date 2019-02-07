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


Route::get('/questionnaire', 'QuestionnairesController@index');
Route::post('/questionnaire/{section}/create', "QuestionnairesController@store");
Route::get('/questionnaire/create', 'QuestionnairesController@create_page');
Route::get('/questionnaire/search', 'QuestionnairesController@search_page');
Route::post('/questionnaire/create/section', 'SectionsController@store');
Route::post('/questionnaire/create/question', 'QuestionsController@create');
Route::post('/questionnaire/create/option', 'OptionsController@create');

Route::get('/questionnaire/section/{section}/edit', 'SectionsController@edit');
Route::patch('/questionnaire/section/{section}', "SectionsController@update");
Route::delete('/questionnaire/section/{section}', "SectionsController@destroy");

Route::get('/questionnaire/question/{question}/edit', 'QuestionsController@edit');
Route::patch('/questionnaire/question/{question}', "QuestionsController@update");
Route::delete('/questionnaire/question/{question}', "QuestionsController@destroy");

Route::get('/questionnaire/option/{option}/edit', 'OptionsController@edit');
Route::patch('/questionnaire/option/{option}', "OptionsController@update");
Route::delete('/questionnaire/option/{option}', "OptionsController@destroy");

//post can become better (removing section and adding a hidden value on forms)