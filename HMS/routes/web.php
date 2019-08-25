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

// Login Routes
Route::get('/', 'LoginController@index')->name('Login.index');
Route::get('/login', 'LoginController@index')->name('Login.index');
Route::post('/login', 'LoginController@login')->name('Login.login');

// Logout Routes
Route::get('/logout', 'LogoutController@index')->name('Logout.index');

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('Admin.index');
Route::post('/admin/addUser', 'AdminController@addUser')->name('Admin.addUser');
Route::get('/admin/addUser', 'AdminController@addUserPage')->name('Admin.addUserPage');