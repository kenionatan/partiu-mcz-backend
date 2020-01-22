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

Route::get('hotels', 'PlaceController@index');
Route::get('hotels/{id}', 'PlaceController@show');
Route::post('hotels', 'PlaceController@store');
Route::put('hotels/{id}', 'PlaceController@update');
Route::delete('hotels/{id}', 'PlaceController@delete');
