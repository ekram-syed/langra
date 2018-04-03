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
    return view('frontend.index');
})->name('frontend');

Auth::routes();

Route::get('/user/home', 'UserController@index')->name('backend');
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/users', 'AdminController@userlist');
Route::get('/categories', 'AdminController@userlist');
