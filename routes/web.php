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
    return view('index');
});

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/data', 'AdminController@data');
Route::get('/detail', 'BookingsController@detail');
Route::get('/booking', 'BookingsController@index');
Route::get('/booking/{booking}', 'BookingsController@show');
Route::post('/booking/{booking}', 'BookingsController@store');
Route::get('/edit/detail/{booking_user}', 'BookingsController@edit');
Route::delete('/delete/detail/{booking_user}', 'BookingsController@destroy');
Route::patch('/booking_user/{booking_user}', 'BookingsController@update');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/post', 'PostsController@index');
Route::get('/post/{post}', 'PostsController@show');