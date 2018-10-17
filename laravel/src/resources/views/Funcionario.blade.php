<?php
/**
 * @author Ivan Vinicius Boneti
 * @package Laravel_api
 */
?>
@extends('FuncionarioPadrao')

@section('content')
<div class='container'>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <thead>
                <th>IDFuncionario</th>
                <th>Sobrenome</th>
                <th>Nome</th>
                <th>Titulo</th>
                <th>DataNac</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Regiao</th>
                <th>Pais</th>
                <th>TelefoneResidencial</th>
                <th>Ações</th>

            </thead>
        </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="js/Funcionario.js"></script>
@endsection