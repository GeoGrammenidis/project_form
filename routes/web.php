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

//i need to fix routes in the future.


Route::get('/questionnaire', 'QuestionnairesController@index');
Route::post('/questionnaire/{section}/create', "QuestionnairesController@store");
Route::get('/questionnaire/create', 'QuestionnairesController@create_page');
Route::get('/questionnaire/search', 'QuestionnairesController@search_page');
Route::post('/questionnaire/create/section/', 'SectionsController@store2');
Route::post('/questionnaire/create/question', 'QuestionsController@create');
Route::post('/questionnaire/create/option', 'OptionsController@create');


//post can become better (removing section and adding a hidden value on forms)

Route::get('/questionnaire/section/{section}/edit', 'SectionsController@edit');
Route::patch('/questionnaire/section/{section}', "SectionsController@update");
Route::delete('/questionnaire/section/{section}', "SectionsController@destroy");


Route::get('/questionnaire/question/{question}/edit', 'QuestionsController@edit');
Route::patch('/questionnaire/question/{question}', "QuestionsController@update");
Route::delete('/questionnaire/question/{question}', "QuestionsController@destroy");

Route::get('/questionnaire/option/{option}/edit', 'OptionsController@edit');
Route::patch('/questionnaire/option/{option}', "OptionsController@update");
Route::delete('/questionnaire/option/{option}', "OptionsController@destroy");

/*
Route::get('/projects', "ProjectsController@index");
Route::get('/projects/create', "ProjectsController@create");
Route::get('/projects/{project}', "ProjectsController@show");
Route::post('/projects', "ProjectsController@store");
Route::get('/projects/{project}/edit', "ProjectsController@edit");
Route::patch('/projects/{project}', "ProjectsController@update");
Route::delete('/projects/{project}', "ProjectsController@destroy");
*/