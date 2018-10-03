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

Route::group(["prefix" => "transportadora"], function() {
    //Lista as transportadoras
    Route::get('','TransportadoraController@getTransportadoras');

    //Pega uma transportadora em específico
    Route::get('{id}','TransportadoraController@getTransportadora');

    //Adiciona uma nova transportadora
    Route::post('','TransportadoraController@addTransportadora');

    //Atualiza uma Transportadora
    Route::put('{id}','TransportadoraController@atualizaTransportadora');

    //Deleta a transportadora
    Route::delete('{id}','TransportadoraController@deletaTransportadora');
});


Route::group(["prefix" => "produtos"], function() {
    //Lista os produtos
    Route::get('','ProdutosController@getProdutos');

    //Pega um produto específico
    Route::get('{id}','ProdutosController@getProduto');

    //Adiciona uma novo produto
    Route::post('','ProdutosController@addProduto');

    //Atualiza um produto
    Route::put('{id}','ProdutosController@atualizaProduto');

    //Deleta um produto
    Route::delete('{id}','ProdutosController@deletaProduto');
});


Route::group(['prefix' => 'funcionarios_territorios'], function () {

    Route::get('', 'FuncionariosTerritoriosController@todosFuncionariosTerritorios');

    Route::get('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@getFuncionarioTerritorio');

    Route::post('', 'FuncionariosTerritoriosController@salvarFuncionarioTerritorio');

    Route::put('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@atualizarFuncionarioTerritorio');

    Route::delete('{IDFuncionario}/{IDTerritorio}', 'FuncionariosTerritoriosController@deletarFuncionarioTerritorio');

});


//by Gabriel Klug
Route::group(['prefix' => 'produto'], function () {

    Route::get('', 'ProdutoController@todosProdutos');

    Route::get('{IDProduto}', 'ProdutoController@getProduto');

    Route::post('', 'ProdutoController@salvarProduto');

    Route::put('{IDProduto}', 'ProdutoController@atualizarProduto');

    Route::delete('{IDProduto}', 'ProdutoController@deletarProduto');

});