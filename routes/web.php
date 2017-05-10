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

Route::get('/Welcome','Controller@welcome');
Auth::routes();

/*Include to MyAuth middleware*/
//Route::group(['middleware' => MyAuth::class], function () {
//    Route::resource('contact', 'ContactController');
//});

/*user home*/
Route::resource('contact', 'ContactController');

/*admin home*/
Route::get('/dashboard', 'HomeController@dashboard');

/*logout user*/
Route::get('/logout','HomeController@doLogout');

/*Contact resource*/
Route::get('create', 'ContactController@index');
Route::post('store', 'ContactController@store');

/*facebook login routes*/
Route::get('auth/facebook',['as'=>'auth/facebook','uses'=>'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback',['as'=>'auth/facebook/callback','uses'=>'Auth\LoginController@handleProviderCallback']);