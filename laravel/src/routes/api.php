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
