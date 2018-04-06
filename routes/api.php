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

Route::get('/carro', 'CarroController@index');
Route::get('/carro/{carro}', 'CarroController@show');
Route::post('/carro', 'CarroController@store');
Route::put('/carro/{carro}', 'CarroController@update');
Route::delete('/carro/{carro}', 'CarroController@destroy');