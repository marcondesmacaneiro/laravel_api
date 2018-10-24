$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:41121/api/produtos/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
   
          sHtml += "<tr  class='registro' id='tr" + val.IDProduto + "'>\
                        <th scope='col'>\
                        <input type='radio' name='registro' id='radio" + val.IDProduto + "'>\
                        </th>\
                        <td>" + val.IDProduto + "</td>\
                        <td>" + val.NomeProduto + "</td>\
                        <td>" + val.IDFornecedor + "</td>\
                        <td>" + val.IDCategoria + "</td>\
                        <td>" + val.QuantidadePorUnidade + "</td>\
                        <td>" + val.PrecoUnitario + "</td>\
                        <td>" + val.UnidadesEmEstoque + "</td>\
                        <td>" + val.UnidadesEmOrdem + "</td>\
                        <td>" + val.NivelDeReposicao + "</td>\
                        <td>" + val.Descontinuado + "</td>\
                    </tr>";
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
