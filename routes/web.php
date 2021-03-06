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


Route::group(['middleware' => ['auth', 'admin']], function () {
    //Route::get('/dashboard', '');
    Route::get('/dashboard1','Admin\DashboardController@dashboard1');
    Route::get('/dashboard2','Admin\DashboardController@dashboard2');

    //my code
    Route::get('/dashboardtemp','Admin\DashboardController@dashboardtemp');

    Route::get('/dashboardchart','Admin\DashboardController@getSafeCheck');

    Route::get('/dashboardsafe','LaravelGoogleGraph@index');

    //Route::get('/dashboardsafe','LaravelGoogleGraph@index');
    //Route::get('/chart','LaravelGoogleGraph@index');
    Route::get('chart', 'ChartContoller@index');

    
    Route::get('/role-register','Admin\DashboardController@registered');
});


