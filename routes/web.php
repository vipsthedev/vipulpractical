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

Route::get('user','UserController@index');
Route::get('user/login','UserController@login');
Route::post('userlogin','UserController@logincheck');
Route::get('user/register','UserController@create');
Route::get('user/home_user','Employeecontroller@index');
Route::post('usersinup','UserController@store');
Route::get('user/logout','UserController@logout');
Route::get('employee','Employeecontroller@index');
Route::get('employee/create','Employeecontroller@create');
Route::get('employee/delete/{id}','Employeecontroller@destory');
Route::post('empsinup','Employeecontroller@store');


// Route::get('user/edit/{id}','UserController@edit');
// Route::get('user/delete/{id}','UserController@destory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
