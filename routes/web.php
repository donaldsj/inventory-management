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
    return view('home');
<<<<<<< HEAD
=======

    return view('inventories.show');

>>>>>>> c171815f1ffbf1261fe467cebd084b6488876506
});

Auth::routes();



Route::get('/',function(){
  return view('reports/create');
});
Route::get('/',function(){
    return view('reports/show');
  });
Route::resource('Reports','ReportController');





Route::group(['middleware' => ['web']], function (){

    Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
    Route::post('auth/login', 'Auth\LoginController@authenticate');
    Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);

    // Registration Routes
    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm ');
    Route::post('auth/register', 'Auth\RegisterController@register');

    //password reset routes
    Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');

    Route::resource('inventories','InventoryController');

    Route::get('/home', 'HomeController@index')->name('home');



});

