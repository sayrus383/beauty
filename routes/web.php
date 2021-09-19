<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/salon', 'SalonController@index')->name('salon.index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/founder', 'PageController@founder')->name('founder');
