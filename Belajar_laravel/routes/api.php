<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/test', function() {
//     return 'Heloow world';
// });

// Route::get('/home','Controller@by');
Route::get('/ninjas', 'NinjasController@index');
Route::post('/ninjas', 'NinjasController@store');
Route::put('/ninjas/{id}', 'NinjasController@update');
Route::delete('/ninjas/{id}', 'NinjasController@destroy');



    





