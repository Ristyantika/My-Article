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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', 'DataController@index');
Route::get('/show/{category_data}', 'DataController@show');

Route::post('/sign_UpApi', 'Auth\RegisterController@sign_UpApi');
Route::post('/loGinApi', 'Auth\LoginController@loGinApi');