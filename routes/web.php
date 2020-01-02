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

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Auth
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@proses_login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//Admin
Route::get('/Dashboard_admin', 'Admin\DashboardAdmin@index')->name('dashboard_admin');
Route::get('/User', 'Admin\UserController@index')->name('user');
Route::get('/users/hapus/{id}', 'Admin\UserController@hapus');
Route::get('/home', 'Admin\HomeTbController@index')->name('home');
Route::get('/homes/hapus/{id}', 'Admin\HomeTbController@hapus');
Route::get('/food', 'Admin\FoodController@index')->name('food');
Route::get('/foods/hapus/{id}', 'Admin\FoodController@hapus');

//Owner
Route::get('/dashboard', 'Owner\Dashboard@index')->name('dashboard');