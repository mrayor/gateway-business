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

use Illuminate\Support\Facades\Route;

Auth::routes();

//Pages
Route::get('/', 'PagesController@index')->name('home');
Route::get('/get-listed', 'PagesController@getListed')->name('get_listed');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/singlelisting', 'PagesController@show');
Route::resource('listings', 'ListingsController');
