<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Dashboard', 'middelware' => 'auth:admin'], function () {
    // auth::admin it is a new guard in  config>auth.php auth by default in laravel
    //check on user name & password
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
});



Route::group(['namespace' => 'Dashboard', 'perfix' => 'admin','middelware' => 'guest:admin'], function () {//guest it means if authenticatable redirect to

    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postlogin')->name('admin.post.login');
    // Route::get('user','UserController@index');


});
