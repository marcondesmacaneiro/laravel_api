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

//Lucas Sebold
Route::group(['prefix' => 'ordens'], function () {

    Route::get('', 'OrdensController@todasOrdens');

    Route::get('{id}', 'OrdensController@getOrdem');

    Route::post('', 'OrdensController@addOrdem');

    Route::put('{id}', 'OrdensController@atualizarOrdem');

    Route::delete('{id}', 'OrdensController@deletarOrdem');

});

Route::group(['prefix' => 'ordens_detalhes'], function () {

    Route::get('', 'Ordens_detalhesController@todasOrdens');

    Route::get('{id}', 'Ordens_detalhesController@getOrdem');

    Route::post('', 'Ordens_detalhesController@addOrdem');

    Route::put('{id}', 'Ordens_detalhesController@atualizarOrdem');

    Route::delete('{id}', 'Ordens_detalhesController@deletarOrdem');

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

Route::group(["prefix" => "clidemo"], function() {
    //Lista os clidemos
    Route::get('','ClidemoController@getClidemos');

    //Pega um clidemo em específico
    Route::get('{id}','ClidemoController@getClidemo');

    //Adiciona um novo clidemo
    Route::post('','ClidemoController@addClidemo');

    //Atualiza um Clidemo
    Route::put('{id}','ClidemoController@atualizaClidemo');

    //Deleta o clidemo
    Route::delete('{id}','ClidemoController@deletaClidemo');
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

/**
 * @author Ivan Vinicius Boneti
 * @package laravel_api
 * @subpackage routes
 */
Route::group(['prefix' => 'funcionario'], function () {

    Route::get('', 'FuncionarioController@todosFuncionario');

    Route::get('{id}', 'FuncionarioController@getFuncionario');

    Route::post('', 'FuncionarioController@salvarFuncionario');

    Route::put('{id}', 'FuncionarioController@atualizarFuncionario');

    Route::delete('{id}', 'FuncionarioController@deletarFuncionario');

});

/**
 * Rota para os Clientes
 *
 * @author Roberto Klann
 * @package Routes
 * @since  02/10/2018
 */
Route::group(['prefix' => 'clientes'], function () {
    Route::get('', 'ClientesController@getAllClientes');
    Route::get('{id}', 'ClientesController@getCliente');
    Route::post('', 'ClientesController@saveCliente');
    Route::put('{id}', 'ClientesController@updateCLiente');
    Route::delete('{id}', 'ClientesController@deleteCliente');
});