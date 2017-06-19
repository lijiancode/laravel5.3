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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/userInfo','HomeController@userInfo');
Route::get('/mainInfo','HomeController@mainInfo');
Route::get('/detail/{id?}','HomeController@detail');
Route::any('/getInfo','HomeController@getInfo');
Route::any('/insertData','HomeController@insertData');