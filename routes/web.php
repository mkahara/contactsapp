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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Welcome','Controller@welcome');
Auth::routes();

/*user home*/
Route::get('/home', 'HomeController@index');

/*testing the html template*/
Route::get('/template','HomeController@template');