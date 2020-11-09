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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dummy', 'DummyController@index');

Route::get('/cars', 'CarController@index');
Route::get('/cars/create', 'CarController@create');
Route::get('/cars/{id}', 'CarController@show');
Route::post('/cars/{id}', 'CarController@store');
Route::get('cars/{id}/edit', 'CarController@update');
Route::put('/cars/{id}', 'CarController@update');
Route::delete('cars/{id}', 'CarController@destroy');

Route::get('/reservations', 'ReservationController@index');
Route::get('/reservations/create', 'ReservationController@create');
Route::get('/reservations/{id}', 'ReservationController@show');
Route::post('/reservations/{id}', 'ReservationController@store');

