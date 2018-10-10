<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de transportadoras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>-->
    <script src="/js/jquery-3.3.1.min.js"></script>
</head>
<body>
    
    <table border=1 id="tabelaTransportadoras">
        <thead>
            <tr>
                <th>IDTransportadora</th>
                <th>NomeConpanhia</th>
                <th>Telefone</th>
                <th colspan=2>Opções</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <br>
    <input type="number" id="IDTransportadora">
    <input type="text" id="NomeConpanhia">
    <input type="text" id="Telefone">
    <button>Inserir</button>

    <script>
        $(document).ready(function() {

            function removeTransportadora(id) {
                if (confirm(`Deseja realmente deletar a transportadora ${id}?`)) {
                    $.ajax(`/api/transportadora/${id}`,
                    {
                        method: "DELETE",
                        success: function() {
                            console.log("deletou!");
                            location.reload();
                        },
                        error: function(err) {
                            console.log(err.responseJSON.message);
                        }
                    });
                }
            }




            $.get("/api/transportadora",function(data) {
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
                                //alteraTransportadora(element.IDTransportadora)
                            })
                        )
                    );
                });
            });
        });
    </script>
</body>
</html>