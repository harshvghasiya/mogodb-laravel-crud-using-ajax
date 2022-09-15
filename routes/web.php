<?php

use Illuminate\Support\Facades\Route;

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

Route::any('/create', 'UserController@create')->name('create');
Route::any('/store', 'UserController@store')->name('admin.user.store');
Route::any('/index', 'UserController@index')->name('admin.user.index');
Route::any('/update', 'UserController@store')->name('admin.user.update');
Route::any('/edit/{id}', 'UserController@edit')->name('admin.user.edit');
Route::any('/destroy/{id}', 'UserController@destroy')->name('admin.user.destroy');
