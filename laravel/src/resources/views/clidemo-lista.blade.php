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
                    <th>IDTipoCliente</th>
                    <th>DescricaoCliente</th>
                    <th colspan=2 style="text-align:center">Opções</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <br>

        <form id="transpForm">
            <div class="form-group">
                <label for="IDTipoCliente">IDTipoCliente</label>
                <input class="form-control" type="number" id="IDTipoCliente">
            </div>
            <div class="form-group">
                <label for="DescricaoCliente">DescricaoCliente</label>
                <input type="text" id="DescricaoCliente" class="form-control">
            </div>
            <div class="form-group">
                <button disabled id="btnInserir" style="width:100%" type="button" class="btn btn-primary">Inserir</button>
            </div>

        </form>

    </div>

    <script>
        $(document).ready(function () {
            //Lista todos os clientes demograficos
            $.get("/api/clidemo", function (data) {
                data.forEach(element => {
                    $("#tabelaTransportadoras tbody").append(
                        $('<tr/>').append(
                            $('<td/>').html(element.IDTipoCliente)
                        ).append(
                            $('<td/>').html(element.DescricaoCliente)
                        ).append(
                            $('<td/>').html("Remover").click(function () {
                                removeClidemo(element.IDTipoCliente)
                            })
                        ).append(
                            $('<td/>').html("Alterar").click(function () {
                                preencheAlterar(element)
                            })
                        )
                    );
                });
            });

            function removeClidemo(id) {
                if (confirm(`Deseja realmente deletar o cliente_demografico ${id}?`)) {
                    $.ajax(`/api/clidemo/${id}`, {
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
                $.ajax("/api/clidemo/", {
                    method: "POST",
                    data: {
                        IDTipoCliente: $("#IDTipoCliente").val(),
                        DescricaoCliente: $("#DescricaoCliente").val()
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

            //Pega o clidemo selecionado e preenche os dados
            function preencheAlterar(clidemo) {

                $("#IDTipoCliente").val(clidemo.IDTipoCliente);
                $("#DescricaoCliente").val(clidemo.DescricaoCliente);

                //Faz o botão de inserir virar botão de alterar
                $("#btnInserir").html("Alterar").off('click').click(() => {
                    $.ajax(`/api/clidemo/${$("#IDTipoCliente").val()}`, {
                        method: "PUT",
                        data: {
                            DescricaoCliente: $("#DescricaoCliente").val()
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
                    $("<p/>").html("Recarregue a página para inserir um novo Cliente Demográfico!")
                );

            }

            //Valida se todos os dados estão preenchidos antes de deixar enviar
            $("#transpForm").keyup(() => {
                IDTipoCliente = $("#IDTipoCliente").val();
                DescricaoCliente = $("#DescricaoCliente").val();

                if (IDTipoCliente != "" && DescricaoCliente != "") {
                    $("#btnInserir").prop('disabled', false);
                } else {
                    $("#btnInserir").prop('disabled', true);
                }
            });
        });

    </script>
</body>

</html>
