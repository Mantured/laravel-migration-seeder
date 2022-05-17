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

Route::get('/', 'TrainsController@index')->name('trains.index');
Route::get('/train/{id}', 'TrainsController@show')->name('trains.show');
Route::get('/users-tinder', 'UserController@index')->name('users-tinder.index');
