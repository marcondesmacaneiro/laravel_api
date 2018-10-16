<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    <button type="button" class="btn btn-dark btn-lg" value="buscar" id="Adicionar">Adicionar</button>
    <button type="button" class="btn btn-dark btn-lg" value="buscar" id="buscar">Buscar</button>

    <table class="table table-striped" id="tabela01">
        <tr>
            <thead>
                <th>ID Produto</th>
                <th>Nome</th>
                <th>ID Fornecedor</th>
                <th>ID Categoria</th>
                <th>Quantidade por Un.</th>
                <th>Preço Unitário</th>
                <th>Un. em estoque</th>
                <th>Un. em ordem</th>
                <th>Nível de reposição</th>
                <th>Descontinuado</th>
                <th>Opções</th>
            </thead>
        </tr>
    </table>



</body>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>

<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
</script>
<script src="js/produtos.js"></script>
</html>