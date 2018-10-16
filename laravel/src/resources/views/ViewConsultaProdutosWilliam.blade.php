<?php

/**
 * Modelo dos Clientes
 *
 * @package Model
 * @author  William Goebel
 * @since   02/10/2018
 */


?>

@extends('ViewPadrao')

@section('content')


    <form>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#"><button type="button" class="btn btn-success">Adicionar</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-primary">Alterar</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-danger">Excluir</button></a>
            </li>
        </ul>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col"><form><input type="checkbox"></form></th>
                <th scope="col">IDProduto</th>
                <th scope="col">NomeProduto</th>
                <th scope="col">IDFornecedor</th>
                <th scope="col">IDCategoria</th>
                <th scope="col">QuantidadePorUnidade</th>
                <th scope="col">PrecoUnitario</th>
                <th scope="col">UnidadesEmEstoque</th>
                <th scope="col">UnidadesEmOrdem</th>
                <th scope="col">NivelDeReposicao</th>
                <th scope="col">Descontinuado</th>
                </tr>
            </thead>
            <tbody id="tabela">
                <tr>
                    <th scope="col"><form><input type="checkbox"></form></th>
                    <th scope="row">1</th>
                    
                </tr>                        
            </tbody>
        </table> 
    </form>       
                           

@endsection

@section('scripts')
<script type="text/javascript" src="js/Produtos.js"></script>
@endsection
