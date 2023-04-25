<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/log', function () {
    return view('layouts.sidebar');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::group(['Middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

####################### begin languages route ################################################
route::group(['prefix'])

####################### end languages route ################################################

});

Route::group(['Middleware' => 'guest:admin'], function () {
    Route::get('/getlogin', 'SigninController@getLogin')->name('get.admin.login');
    Route::post('/postlogin', 'SigninController@login')->name('admin.login');
});




// });
