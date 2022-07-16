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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('producto','App\Http\Controllers\ProductoController@getProducto');
Route::post('addproducto','App\Http\Controllers\ProductoController@insertProducto');
Route::put('upproducto/{id}','App\Http\Controllers\ProductoController@upProducto');

