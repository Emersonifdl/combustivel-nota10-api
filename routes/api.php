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

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
 
    Route::get('postos', 'PostoController@index');
    Route::get('postos/{posto}', 'PostoController@show');
    Route::post('postos', 'PostoController@store');
    Route::put('postos/{posto}', 'PostoController@update');
    Route::delete('postos/{posto}', 'PostoController@delete');
});
// Route::get('postos', 'PostoController@index');
// Route::get('postos/{posto}', 'PostoController@show');
// Route::post('postos', 'PostoController@store');
// Route::put('postos/{posto}', 'PostoController@update');
// Route::delete('postos/{posto}', 'PostoController@delete');