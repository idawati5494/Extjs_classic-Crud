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

Route::get('/bloge', function () {
    return view('blog/home');
});

 
Route::get('/blog','BlogController@index');

Route::get('/blog/create','BlogController@create');
Route::post('/blog','BlogController@store')->name('store_blog');

Route::get('/blog/{id}','BlogController@show');


Route::get('/blog/{id}/edit','BlogController@edit');
Route::put('/blog/{id}','BlogController@update')->name('update_blog');

Route::delete('/blog/{id}/delete','BlogController@destroy')->name('destroy_blog');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
