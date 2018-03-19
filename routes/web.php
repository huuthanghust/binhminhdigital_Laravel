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

Route::get('/', [
	'as' => 'trang_chu',
	'uses' => 'PageController@index'
]);

Route::get('/product',[
	'as' => 'san_pham',
	'uses' => 'PageController@product'
]);
Route::get('/contact',[
	'as' => 'contact',
	'uses' => 'PageController@contact'
]);

Route::get('/information',[
	'as' => 'information',
	'uses' => 'PageController@getInfo'
]);