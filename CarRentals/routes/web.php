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

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/filter', 'CarController@filter')->name('car.filter');

Route::resource('car', 'CarController');

// all cars -> index -> carView
// details for car -> show -> carDetails
// filter cars ->  carView

