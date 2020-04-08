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

Route::get('/home/{categoryId?}', 'IndexController@index');
// Route::get('/index','IndexController@index');

Route::get('/categories','CategoryController@index');

Route::get('/categories/create','CategoryController@create');

Route::post('/categories','CategoryController@store');

Route::get('/categories/{categoryId}','CategoryController@show');
Route::get('/categories/{categoryId}/edit','CategoryController@edit');
Route::put('/categories/{categoryId}','CategoryController@update');
Route::delete('/categories/{categoryId}','CategoryController@destroy');


Route::resource('items','ItemController');
// Route::get('/items/{itemId}/category', 'ItemController@item_foring_key_category');

// Route::get('/search','CategoryController@search');




