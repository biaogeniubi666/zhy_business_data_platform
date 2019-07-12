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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', 'UserController@index')->name('index'); //主页控制台

//读取综合院总体业务量↓
Route::get('/', 'DataController@total_business_volume')->name('total');


Route::get('/pie', 'DataController@a11')->name('pie');

Route::get('/types_of_industry', 'DataController@types_of_industry')->name('types');
Route::get('/business_area', 'DataController@business_area')->name('map');
Route::get('/business_area2', 'DataController@business_area_2')->name('test');


