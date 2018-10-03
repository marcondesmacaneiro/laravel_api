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

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'regiao'], function () {

    Route::get('', 'RegiaoController@todasRegioes');

    Route::get('{id}', 'RegiaoController@getRegiao');

    Route::post('', 'RegiaoController@salvarRegiao');

    Route::put('{id}', 'RegiaoController@atualizarRegiao');

    Route::delete('{id}', 'RegiaoController@deletarRegiao');

});

Route::group(['prefix' => 'funcionarios_territorios'], function () {

    Route::get('', 'FuncionariosTerritoriosController@todosFuncionariosTerritorios');

    Route::get('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@getFuncionarioTerritorio');

    Route::post('', 'FuncionariosTerritoriosController@salvarFuncionarioTerritorio');

    Route::put('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@atualizarFuncionarioTerritorio');

    Route::delete('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@deletarFuncionarioTerritorio');

});