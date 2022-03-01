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

Route::get('/','HomeController@index');
Route::get('rooms', function () {return view('room'); });
Route::get('contact', function () { return view('contact'); });
Route::get('roomdetails', function () { return view('roomdetails'); });
Route::get('addroom','AddroomController@create')->name('addroom');
Route::post('createroom','AddroomController@store')->name('createroom');
Route::get('addedrooms', 'AddroomController@index')->name('addedrooms');
Route::get('editroom/{id}', 'AddroomController@edit')->name('editroom');
Route::post('updateroom/{id}', 'AddroomController@update')->name('updateroom');
Route::post('destroyroom/{id}', 'AddroomController@destroy')->name('destroyroom');
