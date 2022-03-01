<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    echo "<p>Fully optimized.*</p>";
});
Route::get('/','HomeController@index');
Route::get('contact', function () { return view('contact'); });
Route::get('completed', function () { return view('completed'); });
Route::get('roomdetails/{id}', 'AddroomController@show')->name('roomdetails');
Route::get('addroom','AddroomController@create')->name('addroom');
Route::post('createroom','AddroomController@store')->name('createroom');
Route::get('addedrooms', 'AddroomController@index')->name('addedrooms');
Route::get('editroom/{id}', 'AddroomController@edit')->name('editroom');
Route::post('updateroom/{id}', 'AddroomController@update')->name('updateroom');
Route::post('destroyroom/{id}', 'AddroomController@destroy')->name('destroyroom');

Route::get('bookonline', 'BookController@create')->name('bookonline');
Route::get('rooms', 'BookController@index')->name('rooms');
Route::post('createbooking', 'BookController@store')->name('createbooking');
//Route::get('completebooking', 'BookController@complete')->name('completebooking');
Route::post('booknow', 'BookController@save')->name('booknow');