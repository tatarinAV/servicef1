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
Route::get('/add', 'ServicesController@getForm');
Route::post('/add', 'ServicesController@addService');
Route::get('/services/{service_id}', 'ServicesController@getService');
Route::get('/services', 'ServicesController@index');
Route::get('/dashboard', 'HomeController@dashboard');

Auth::routes();

Route::get('/', 'HomeController@dashboard');
