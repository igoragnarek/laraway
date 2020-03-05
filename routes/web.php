<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BasicController@index');

Route::get('/blog', 'BasicController@blog');

Route::get('/page-{id}', 'BasicController@page')->where('id', '[0-9]+')->middleware('views');

Route::post('/pager', 'BasicController@create');

Route::post('/create', 'HomeController@create');

Route::delete('/delete/{article}', 'HomeController@delete')->where('id', '[0-9]+');



