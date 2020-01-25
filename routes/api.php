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
Route::get('hotels/{id}', 'HotelController@show');
Route::post('hotels', 'HotelController@store');
Route::put('hotels/{id}', 'HotelController@update');
Route::delete('hotels/{id}', 'HotelController@delete');



Route::get('restaurant-categories', 'RestaurantCategoryController@index');
Route::get('restaurant-categories/{id}', 'RestaurantCategoryController@show');
Route::post('restaurant-categories', 'RestaurantCategoryController@store');
Route::put('restaurant-categories/{id}', 'RestaurantCategoryController@update');
Route::delete('restaurant-categories/{id}', 'RestaurantCategoryController@delete');

