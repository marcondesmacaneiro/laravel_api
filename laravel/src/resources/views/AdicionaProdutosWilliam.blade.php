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

<div class="container">
    <form>
    <div class="form-group">
        <label for="NomeDoProduto">Nome Do Produto</label>
        <input type="text" class="form-control" id="NomeDoProduto" placeholder="Entre com o Nome Do Produto">
    </div>
    <div class="form-group">
        <label for="IDFornecedor">ID Fornecedor</label>
        <input type="number" class="form-control" id="IDFornecedor" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="IDCategoria">ID Categoria</label>
        <input type="number" class="form-control" id="IDCategoria" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="QuantidadePorUnidade">Quantidade Por Unidade</label>
        <input type="text" class="form-control" id="QuantidadePorUnidade" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="PrecoUnitario">Preco Unitario</label>
        <input type="number" class="form-control" id="PrecoUnitario" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="UnidadesEmEstoque">Unidades Em Estoque</label>
        <input type="number" class="form-control" id="UnidadesEmEstoque" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="UnidadesEmOrdem">Unidades Em Ordem</label>
        <input type="number" class="form-control" id="UnidadesEmOrdem" placeholder="Entre com o">
    </div>    
    <div class="form-group">
        <label for="NivelDeReposicao">Nivel De Reposicao</label>
        <input type="number" class="form-control" id="NivelDeReposicao" placeholder="Entre com o">
    </div>
    <div class="form-group">
        <label for="Descontinuado">Descontinuado</label>
        <input type="text" class="form-control" id="Descontinuado" placeholder="Entre com o">
    </div>   
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="js/Produtos.js"></script>
@endsection
