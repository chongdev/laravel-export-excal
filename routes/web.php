<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index')->name('users');
Route::get('/users/export/excel', 'UserController@excel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
