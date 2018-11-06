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

/**
 * Modelo dos Clientes
 *
 * @package Model
 * @author  William Goebel
 * @since   02/10/2018
 */
Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/todosFuncionario', function () {
    return view('Funcionario');
});

Route::group(["prefix" => "transportadora"], function () {
    //Lista as transportadoras
    Route::get('', function () {
        return view('transportadora-lista');
    });
});

Route::get('/clidemo', function () {
    return view('clidemo-lista');
});

Route::get('/consultaCliente', function () {
    return view('ViewPadrao');
});

Route::get('/consultaCliente', function () {
    return view('ViewConsultaClientesTeste');
});

/**
 * Web Routes
 *
 * @package Web
 * @author  William Goebel
 * @since   02/10/2018
 */
Route::get('/ConsultaProdutosWilliam', function () {
    return view('ViewConsultaProdutosWilliam');
});


Route::get('/AdicionaProdutosWilliam', function () {
    return view('AdicionaProdutosWilliam');
});

Route::get('/AlteraProdutosWilliam', function () {
    return view('AlteraProdutosWilliam');
});


Route::get('/cadastroCliente', function () {
    return view('ViewManutencaoCliente');
});

Route::get('/consultaprodutos', function () {
    return view('produtos');
});
Route::get('/produtos', function () {
    return view('ViewProdutos');
});

