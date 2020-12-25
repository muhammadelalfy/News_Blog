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

Route::get('/', 'HomeController@index');
Route::get('Dashboard', 'AdminController@adminDashboard');
Route::get('adminList', 'AdminController@adminList');


                        //////////////////////////////// ADMIN /////////////////////////

Route::resource('Categories', 'Admin\Category');  //categories
Route::resource('Categories\create', 'Admin\Category');
Route::resource('Categories\{id}\edit', 'Admin\Category');

