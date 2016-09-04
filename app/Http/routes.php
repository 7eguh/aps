<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('settings/password', 'AdminController@editPassword');
Route::post('settings/password', 'AdminController@updatePassword');
Route::get('settings/profile', 'AdminController@editProfile');
Route::post('settings/profile', 'AdminController@updateProfile');

Route::auth();

Route::get('/pengumuman', 'HomeController@index');
Route::resource('pendaftar', 'PendaftarController');
Route::resource('jurusan', 'JurusanController');
Route::resource('penguji', 'PengujiController');
Route::resource('kepsek', 'KepsekController');
Route::resource('hasil', 'HasilController');