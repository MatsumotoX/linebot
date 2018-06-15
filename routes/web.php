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

Route::get('/', 'LineController@getIndex')->name('line.index');
Route::get('/test', 'LineTest@pushText');

Route::post('/input', 'LineController@sendText')->name('line.input');
Route::post('/crypto', 'LineController@sendPrice')->name('line.crypto');