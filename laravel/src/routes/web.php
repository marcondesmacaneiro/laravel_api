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
=======
Route::get('/consultaprodutos', function () {
    return view('produtos');
});

>>>>>>> c56f694def231e67aae2b261ab878882703a7a53
