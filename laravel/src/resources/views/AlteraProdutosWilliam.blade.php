<?php

/**
 * Modelo dos Clientes
 *
 * @package Model
 * @author  William Goebel
 * @since   02/10/2018
 */


?>

<div class="container">
    <form>        
        <div class="form-group">
            <label for="IDdoProduto">ID do Produto</label>
            <input type="number" class="form-control" id="IDdoProduto" placeholder="Entre com o ID do Produto" disable>
        </div>
        <div class="form-group">
            <label for="NomeDoProduto">Nome Do Produto</label>
            <input type="text" class="form-control" id="NomeDoProduto" placeholder="Entre com o Nome Do Produto" required>
        </div>
        <div class="form-group">
            <label for="IDFornecedor">ID Fornecedor</label>
            <input type="number" class="form-control" id="IDFornecedor" placeholder="Entre com o ID Fornecedor">
        </div>
        <div class="form-group">
            <label for="IDCategoria">ID Categoria</label>
            <input type="number" class="form-control" id="IDCategoria" placeholder="Entre com o ID Categoria">
        </div>
        <div class="form-group">
            <label for="QuantidadePorUnidade">Quantidade Por Unidade</label>
            <input type="text" class="form-control" id="QuantidadePorUnidade" placeholder="Entre com a Quantidade Por Unidad">
        </div>
        <div class="form-group">
            <label for="PrecoUnitario">Preco Unitario</label>
            <input type="number" class="form-control" id="PrecoUnitario" placeholder="Entre com o Preco Unitario">
        </div>
        <div class="form-group">
            <label for="UnidadesEmEstoque">Unidades Em Estoque</label>
            <input type="number" class="form-control" id="UnidadesEmEstoque" placeholder="Entre com o Unidades Em Estoque">
        </div>
        <div class="form-group">
            <label for="UnidadesEmOrdem">Unidades Em Ordem</label>
            <input type="number" class="form-control" id="UnidadesEmOrdem" placeholder="Entre com o Unidades Em Ordem">
        </div>    
        <div class="form-group">
            <label for="NivelDeReposicao">Nivel De Reposicao</label>
            <input type="number" class="form-control" id="NivelDeReposicao" placeholder="Entre com o Nivel De Reposicao">
        </div>
        <div class="form-group">
            <label for="Descontinuado">Descontinuado</label>
            <select class="form-control" id="Descontinuado">
                <option value="F">F</option>
                <option value="T">T</option>
            </select>
        </div>   
        <button type="button" class="btn btn-primary" id="alterar">Alterar</button>
        <button type="button" class="btn btn-primary" id="cancelar">Cancelar</button>
        <button type="reset" class="btn btn-primary" id="cancelar">Limpar</button>
    </form>
</div>
