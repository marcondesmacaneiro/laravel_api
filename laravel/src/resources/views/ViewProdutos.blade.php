<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    <div class='container-fluid'>
                <button type="button" class="btn btn-dark btn-lg" value="adicionar" id="adicionar">Adicionar</button>
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

        <!-- MODAL PARA INSERIR PRODUTO -->
        <div class="modal fade" id="cadastrarForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Cadastrar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="idProduto">ID Produto</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" readonly id="idProduto" class="form-control validate">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nomeProduto">Nome Produto</label>
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="nomeProduto" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-deep-orange" id='cadastrar'>Cadastrar</button>
                    </div>
                </div>
            </div>
        </div><!-- FIM MODAL PARA INSERIR -->

        <!-- MODAL PARA ALTERAR PRODUTO -->
        <div class="modal fade" id="alterarForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Alterar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="idProdutoAltera">ID Produto</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" readonly id="idProdutoAltera" class="form-control validate">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nomeProdutoAltera">Nome Produto</label>
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="nomeProdutoAltera" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-deep-orange" id='alterar'>Alterar</button>
                    </div>
                </div>
            </div>
        </div><!-- FIM MODAL PARA INSERIR -->


    </div><!-- fim div principal 'container'-->
</body>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="js/produtos.js"></script>
</html>