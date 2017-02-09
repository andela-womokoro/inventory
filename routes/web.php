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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/all', 'TrackingController@getProducts');
Route::post('/products/new', 'TrackingController@addProduct');
Route::get('/products/{id}/', 'TrackingController@findProduct');
Route::get('/categories/all', 'TrackingController@getCategories');
Route::post('/categories/new', 'TrackingController@addCategory');

