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

Route::get('/consultaPadrao', function () {
    return view('ViewPadrao');
});

Route::get('/consultaCliente', function () {
    return view('ViewConsultaClientesTeste');
});

Route::get('/consultaprodutos', function () {
    return view('produtos');
});


Route::get('/cadastroCliente', function () {
    return view('ViewManutencaoCliente');
});

