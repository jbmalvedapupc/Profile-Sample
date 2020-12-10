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

Route::get('/', 'EmployeeController@index')->name('employees.index');
Route::get('/employees/create', 'EmployeeController@create')->name('employees.create');
Route::post('/employees', 'EmployeeController@store')->name('employees.store');
Route::get('/employees/{employee}', 'EmployeeController@show')->name('employees.show');
Route::put('/employees/{employee}', 'EmployeeController@update')->name('employees.update');