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

});

Auth::routes();
Route::get('logout', 'Auth\Logincontroller@getLogout');


Route::group(['middleware' => ['web']], function (){

    
    // Registration Routes
    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm ');
    Route::post('auth/register', 'Auth\RegisterController@register');

    //password reset routes
    Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');

    Route::resource('inventories', 'InventoryController');
    Route::resource('Reports', 'ReportController');

    Route::get('/home', 'HomeController@index')->name('home');



});

