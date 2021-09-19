<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/salon', 'SalonController@index')->name('salon.index');
