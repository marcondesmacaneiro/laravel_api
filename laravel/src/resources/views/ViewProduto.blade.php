@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome Companhia</th>
                <th>Nome Contato</th>
                <th>Titulo</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Região</th>
                <th>Cep</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela01"></tbody>
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="js/produtos.js"></script>
@endsection
