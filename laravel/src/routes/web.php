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

Route::group(['prefix'=>'api'], function () {
    Route::group(['prefix'=>'pessoa'], function() {

        Route::get('', function() {
            return 'rota para pegar todas as pessoas';
        });

        Route::get('{id}', function($id) {
            return ' Localizar os dados da pessoa com ID '. $id;
        });

        Route::post('', function() {
            return 'Criar uma nova pessoa';
        });

        Route::put('{id}', function($id){
            return 'Atualizar os dados da pessoa com ID '.$id;
        });

        Route::delete('{id}', function($id) {
            return 'Deletar a pessoa com ID '.$id;
        });

    });
});

Route::get('/', function () {
    return view('welcome');
});
