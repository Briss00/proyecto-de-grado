<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index')->name('index');
Route::resource('/employee', 'EmployeeController');

