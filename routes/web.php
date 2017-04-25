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

Route::get('/', function()
{
    return View::make('home');
});

Route::get('/charts', function()
{
    return view('mcharts');
});

Route::get('/tables', function()
{
    return view('table');
});

Route::get('/forms', function()
{
    return view('form');
});

Route::get('/grid', function()
{
    return view('grid');
});

Route::get('/buttons', function()
{
    return view('buttons');
});


Route::get('/icons', function()
{
    return view('icons');
});

Route::get('/panels', function()
{
    return View('panel');
});

Route::get('/typography', function()
{
    return View('typography');
});

Route::get('/notifications', function()
{
    return View('notifications');
});

Route::get('/blank', function()
{
    return View('blank');
});

Route::get('/login', function()
{
    return View('login');
});

Route::get('/documentation', function()
{
    return View('documentation');
});