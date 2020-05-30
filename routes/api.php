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

Route::get('/user', 'SampleController@api_user')->middleware('auth:api');
Route::any('/ping', 'SampleController@api_ping');
Route::any('/aaa', 'SampleController@api_aaa');

