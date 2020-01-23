<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('hotels', 'HotelController@index');
Route::get('hotel/{id}', 'HotelController@show');
Route::post('hotels', 'HotelController@store');
Route::put('hotel/{id}', 'HotelController@update');
Route::delete('hotel/{id}', 'HotelController@delete');
