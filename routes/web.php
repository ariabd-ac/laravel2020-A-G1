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
    return view('welcome');
});

// Route::get('dashboard', 'DashbardController@index');

// Route::get('/login', 'AuthController@login');
// Route::post('/postlogin', 'AuthController@postlogin');

Route::resource('guru', 'TeachersController');
// Route::get('admin', 'TeachersController@admin');
Route::resource('siswa', 'StudentsController');
Route::resource('mapel', 'MapelController');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
