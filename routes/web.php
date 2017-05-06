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

/*admin home*/
Route::get('/dashboard', 'HomeController@dashboard');

/*logout user*/
Route::get('/logout','HomeController@doLogout');

//Route::get('/', function()
//{
//    return View::make('home');
//});

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


Route::get('/documentation', function()
{
    return View('documentation');
});

/*facebook login routes*/
Route::get('auth/facebook',['as'=>'auth/facebook','uses'=>'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback',['as'=>'auth/facebook/callback','uses'=>'Auth\LoginController@handleProviderCallback']);