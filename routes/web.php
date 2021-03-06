<?php
use App\Http\Middleware\MyAuth;
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

Auth::routes();

/*user home*/
Route::resource('contact', 'ContactController');

/*trash*/
Route::get('/trash', 'ContactController@trash');

/*restore*/
Route::get('/restore/{id}', 'ContactController@restore');

/*Export contact to vCard*/
Route::get('/exporttovcard/{id}', 'ContactController@exportToVcard');

/*403 not found*/
Route::get('/notfound', 'ContactController@pageNotFound');

/*logout user*/
Route::get('/logout','HomeController@doLogout');

/*Contact resource*/
Route::get('create', 'ContactController@index');
Route::post('store', 'ContactController@store');

/*facebook login routes*/
Route::get('auth/facebook',['as'=>'auth/facebook','uses'=>'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback',['as'=>'auth/facebook/callback','uses'=>'Auth\LoginController@handleProviderCallback']);