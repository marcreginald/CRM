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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::middleware('auth', 'isAdmin')->namespace('admin')->group(function(){
    Route::get('admin/users', "UsersController@index")->name('admin.users');
    Route::post('admin/users/store', 'UsersController@store')->name('admin.user.store');
});

Route::get('/home', 'HomeController@index')->name('home');
