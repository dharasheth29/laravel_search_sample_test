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


Route::get('/', 'SearchUsersController@index')->name('searchGet');
Route::get('/search', 'SearchUsersController@index')->name('searchGet');
Route::post('/search', 'SearchUsersController@index')->name('searchPost');