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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**-------------------------------------Administrator---------------------------------------- */

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {

    Route::get('login', 'AdminAuthController@getLogin')->name('login');
    Route::post('login', 'AdminAuthController@postLogin');
    Route::post('logout', 'AdminAuthController@postLogout')->name('logout');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});
