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

Route::get('/get/{id}', 'GetController@getProject');
Route::get('/getAll', 'GetController@getAll');
Route::post('/reqproject/{id}', 'ReqController@index');
Route::post('/reqjasa/{id}', 'ReqController@store');