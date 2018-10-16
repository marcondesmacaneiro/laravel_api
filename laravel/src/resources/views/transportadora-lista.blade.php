<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de transportadoras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>-->

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
</head>

<body>

    <div class="container">
        <table class="table" id="tabelaTransportadoras">
            <thead class="thead-light">
                <tr>
                    <th>IDTransportadora</th>
                    <th>NomeConpanhia</th>
                    <th>Telefone</th>
                    <th colspan=2 style="text-align:center">Opções</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <br>

        <form id="transpForm">
            <div class="form-group">
                <label for="IDTransportadora">IDTransportadora</label>
                <input class="form-control" type="number" id="IDTransportadora">
            </div>
            <div class="form-group">
                <label for="NomeConpanhia">NomeConpanhia</label>
                <input type="text" id="NomeConpanhia" class="form-control">
            </div>
            <div class="form-group">
                <label for="Telefone">Telefone</label>
                <input type="text" id="Telefone" class="form-control">
            </div>
            <div class="form-group">
                <button disabled id="btnInserir" style="width:100%" type="button" class="btn btn-primary">Inserir</button>
            </div>

        </form>

    </div>

    <script>
        $(document).ready(function () {
            //Lista todas as transportadoras
            $.get("/api/transportadora", function (data) {
                data.forEach(element => {
                    $("#tabelaTransportadoras tbody").append(
                        $('<tr/>').append(
                            $('<td/>').html(element.IDTransportadora)
                        ).append(
                            $('<td/>').html(element.NomeConpanhia)
                        ).append(
                            $('<td/>').html(element.Telefone)
                        ).append(
                            $('<td/>').html("Remover").click(function () {
                                removeTransportadora(element.IDTransportadora)
                            })
                        ).append(
                            $('<td/>').html("Alterar").click(function () {
                                preencheAlterar(element)
                            })
                        )
                    );
                });
            });

            function removeTransportadora(id) {
                if (confirm(`Deseja realmente deletar a transportadora ${id}?`)) {
                    $.ajax(`/api/transportadora/${id}`, {
                        method: "DELETE",
                        success: function () {
                            console.log("deletou!");
                            location.reload();
                        },
                        error: function (err) {
                            console.log(err.responseJSON.message);
                        }
                    });
                }
            }

            //Adiciona uma nova transportadora quando o botão é pressionaddo
            $("#btnInserir").click(() => {
                $.ajax("/api/transportadora/", {
                    method: "POST",
                    data: {
                        IDTransportadora: $("#IDTransportadora").val(),
                        NomeConpanhia: $("#NomeConpanhia").val(),
                        Telefone: $("#Telefone").val()
                    },
                    success: function (data) {
                        alert("Inserido com sucesso!");
                        location.reload();
                    },
                    error: function (err) {
                        alert(err.responseJSON.resposta);
                    }
                });
            });

            //Pega a transportadora selecionado e preenche os dados
            function preencheAlterar(transportadora) {
                $("#IDTransportadora").val(transportadora.IDTransportadora);
                $("#NomeConpanhia").val(transportadora.NomeConpanhia);
                $("#Telefone").val(transportadora.Telefone);

                //Faz o botão de inserir virar botão de alterar
                $("#btnInserir").html("Alterar").off('click').click(() => {
                    $.ajax(`/api/transportadora/${$("#IDTransportadora").val()}`, {
                        method: "PUT",
                        data: {
                            NomeConpanhia: $("#NomeConpanhia").val(),
                            Telefone: $("#Telefone").val()
                        },
                        success: (data) => {
                            alert("Alterado com sucesso!");
                            location.reload();
                        },
                        error: (err) => {
                            alert(err.responseJSON.resposta);
                        }
                    });
                }).prop('disabled', false);

                //Cria um aviso de que a página deve ser recarregada caso desejar inserir uma nova
                $("#transpForm").append(
                    $("<p/>").html("Recarregue a página para inserir uma nova transportadora!")
                );

            }

            //Valida se todos os dados estão preenchidos antes de deixar enviar
            $("#transpForm").keyup(() => {
                valID = $("#IDTransportadora").val();
                nomeCon = $("#NomeConpanhia").val();
                tel = $("#Telefone").val();

                if (valID != "" && nomeCon != "" && tel != "") {
                    $("#btnInserir").prop('disabled', false);
                } else {
                    $("#btnInserir").prop('disabled', true);
                }
            });
        });

    </script>
</body>

</html>
