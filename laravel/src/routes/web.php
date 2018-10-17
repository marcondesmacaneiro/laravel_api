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

<<<<<<< Updated upstream
<<<<<<< HEAD
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
=======
Route::get('/todosFuncionario', function () {
    return view('Funcionario');
});

Route::group(["prefix" => "transportadora"], function() {
    //Lista as transportadoras
    Route::get('',function() {
        return view('transportadora-lista');
    });
});

Route::get('/clidemo',function() {
    return view('clidemo-lista');
});
=======
>>>>>>> Stashed changes

Route::get('/consultaCliente', function () {
>>>>>>> 2e54df34f00fbb518df66b2a855bfb6260e48518
    return view('ViewPadrao');
});

Route::get('/consultaCliente', function () {
    return view('ViewConsultaClientesTeste');
});
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
>>>>>>> Stashed changes
Route::get('/consultaprodutos', function () {
    return view('ViewProduto');
});
<<<<<<< Updated upstream


Route::get('/cadastroCliente', function () {
    return view('ViewManutencaoCliente');
});

=======
  
Route::get('/consultaprodutos', function () {
    return view('produtos');
});
>>>>>>> 2e54df34f00fbb518df66b2a855bfb6260e48518
=======
Route::get('/produtos', function () {
    return view('ViewProdutos');
});
>>>>>>> Stashed changes
