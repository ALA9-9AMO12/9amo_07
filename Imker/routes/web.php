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
//contact
Route::get('contact-us','ContactUsController@index');
Route::post('contact-us','ContactUsController@handleForm');
//create
Route::get('form-validation','UserController@create')->name('user.create');
Route::post('form-validation','UserController@store')->name('user.store');
