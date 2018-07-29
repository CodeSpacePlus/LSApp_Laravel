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

Route::get('posts', 'PostsResourceController@index');
Route::get('post/{id}', 'PostsResourceController@show');
Route::post('post', 'PostsResourceController@store');
Route::put('post', 'PostsResourceController@store');
Route::delete('post/{id}', 'PostsResourceController@destroy');
