@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="IDCliente">Codigo</label>
        <input style="width: 100px;" type="number" class="form-control" id="IDCliente" name="IDCliente"  placeholder="Codigo">
    </div>
    <div class="form-group">
        <label for="NomeCompanhia">Nome Companhia</label>
        <input style="width: 400px;" type="text" class="form-control" id="NomeCompanhia" name="NomeCompanhia" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="NomeContato">Nome Companhia</label>
        <input style="width: 400px;" type="text" class="form-control" id="NomeContato" name="NomeContato" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="TituloContato">Titulo Contato</label>
        <input style="width: 400px;" type="text" class="form-control" id="TituloContato" name="TituloContato" placeholder="Titulo Contato">
    </div>
    <div class="form-group">
        <label for="Endereco">Nome Companhia</label>
        <input style="width: 400px;" type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Endereço">
    </div>
    <div class="form-group">
        <label for="Cidade">Cidade</label>
        <input style="width: 400px;" type="text" class="form-control" id="Cidade" name="Cidade" placeholder="Cidade">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
