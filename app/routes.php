<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','StudentController@index');
Route::post('save','StudentController@saverecord');
Route::post('showdata','StudentController@display');
Route::post('editrow','StudentController@edit');
Route::post('deleterow','StudentController@delete');
Route::post('update','StudentController@updaterecord');
