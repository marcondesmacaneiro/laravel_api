$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:41112/api/clientes/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.IDCliente + "</td><td>" + val.NomeCompanhia + "</td> <td>" + val.NomeContato + "</td> <td>" + val.TituloContato + "</td><td>" + val.Endereco + "</td> <td>" + val.Cidade + "</td> <td>" + val.Regiao + "</td> <td>" + val.CEP + "</td> <td><i class='far fa-edit'></i>&nbsp;<i class='fas fa-trash'></i></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#gravar").click(function() {
      let sNome = $("#nome").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:41071/pessoa",
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
    });

    $("#excluir").click(function() {
      let iCodigo = $("#codigo").val();

      if(iCodigo == "") {

      } else {
        //enviado
      $.ajax({
        type: "DELETE",
        url: "http://localhost:41071/pessoa/"+ iCodigo,
        success: function(data) {
          alert("Excluido com Sucesso!");
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
      }

    });

    $("#alterar").click(function() {
      let iCodigo = $("#codigo").val();
      let sNome = $("#nome").val();

      if(iCodigo == "" || sNome == "") {

      } else {
        //enviado
      $.ajax({
        type: "PATCH",
        url: "http://localhost:41071/pessoa/"+ iCodigo,
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          alert("Alterado com Sucesso!");
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
      }

    });

  });
