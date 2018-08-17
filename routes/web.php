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

Route::resource('cars', 'CarController');
Route::resource('users', 'UserController');
// Route::get('/cars', 'CarController@index')->name('carc');
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();
//Route::auth();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
