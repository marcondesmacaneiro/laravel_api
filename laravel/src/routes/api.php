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


Route::group(['prefix' => 'regiao'], function () {

    Route::get('', 'RegiaoController@todasRegioes');

    Route::get('{id}', 'RegiaoController@getRegiao');

    Route::post('', 'RegiaoController@salvarRegiao');

    Route::put('{id}', 'RegiaoController@atualizarRegiao');

    Route::delete('{id}', 'RegiaoController@deletarRegiao');

});

Route::group(['prefix' => 'clientes'], function () {

    Route::get('', 'ClientesController@getAllClientes');

    Route::get('{id}', 'ClientesController@getCliente');

    Route::post('', 'ClientesController@saveCliente');

    Route::put('{id}', 'ClientesController@updatePessoa');

    Route::delete('{id}', 'ClientesController@deleteCliente');

});

