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

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::get('products', 'API\ProductController@index');
Route::get('products/{product}', 'API\ProductController@show');
Route::post('product', 'API\ProductController@store')->middleware(['auth:api', 'scope:create']);
Route::put('products/{product}/', 'API\ProductController@update')->middleware(['auth:api', 'scope:edit']);
Route::delete('products/{product}', 'API\ProductController@destroy')->middleware(['auth:api', 'scope:delete']);

