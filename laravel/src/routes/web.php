<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "transportadora"], function() {
    //Lista as transportadoras
    Route::get('',function() {
        return view('transportadora-lista');
    });

    //Pega uma transportadora em específico
    //Route::get('{id}','TransportadoraController@getTransportadora');

    //Adiciona uma nova transportadora
    //Route::post('','TransportadoraController@addTransportadora');

    //Atualiza uma Transportadora
    //Route::put('{id}','TransportadoraController@atualizaTransportadora');

    //Deleta a transportadora
    //Route::delete('{id}','TransportadoraController@deletaTransportadora');
});

Route::get('/consultaCliente', function () {
    return view('ViewPadrao');
});

Route::get('/consultaClienteTeste', function () {
    return view('ViewConsultaClientesTeste');
});
  
Route::get('/consultaprodutos', function () {
    return view('produtos');
});