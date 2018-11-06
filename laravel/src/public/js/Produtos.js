$(document).ready(function() {
    
    var way = window.location.pathname;  
    
    if(way == "/ConsultaProdutosWilliam"){
      buscaDados();
    }

    function buscaDados() {
      $.getJSON("http://localhost:41121/api/produtos/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
   
          sHtml += "<tr>\
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
                        <td>\
                            <button id=" + val.IDProduto + " class='btn alterar'><i class='far fa-edit'></i></button>\
                            <button id=" + val.IDProduto + " class='btn excluir'><i class='fas fa-trash'></i></button>\
                        </td>\
                    </tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;

        $(".excluir").click(function() {
          let iIDProduto = this.id; 
          if(iIDProduto == "") {

          } else {
            //enviado
          $.ajax({
            type: "DELETE",
            url: "http://localhost:41121/api/produtos/"+ iIDProduto,
            success: function(data) {
              alert("Excluido com Sucesso!");
            },
            statusCode: {
              500: function() {
                alert( "Este registro não pode ser excluido pois viola o vinculo com outros registros" );
              }
            },
            contentType: "application/json",
            dataType: "json"
          }).then(res => {
            window.location.href = "ConsultaProdutosWilliam";
          });
          }
        });        

        $(".alterar").click(function(){          
          $("#tabela").load("AlteraProdutosWilliam");
          carregaAlterar();
        }); 
        
      });
    };

    function carregaAlterar(){
      $.getJSON("http://localhost:41121/api/produto/"+ 1, function(data, status) {
        $("#IDdoProduto").val(data.IDProduto),
        $("#NomeDoProduto").val(data.NomeProduto),
        $("#IDFornecedor").val(data.IDFornecedor),
        $("#IDCategoria").val(data.IDCategoria),
        $("#QuantidadePorUnidade").val(data.QuantidadePorUnidade),
        $("#PrecoUnitario").val(data.PrecoUnitario),
        $("#UnidadesEmEstoque").val(data.UnidadesEmEstoque),
        $("#NivelDeReposicao").val(data.NivelDeReposicao),
        $("#Descontinuado").val(data.Descontinuado4);

        $("#alterar").click(function() {
          let iIDProduto             = $("#IDdoProduto").val(),
              sNomeProduto           = $("#NomeDoProduto").val(),
              iIDFornecedor          = $("#IDFornecedor").val(),
              iIDCategoria           = $("#IDCategoria").val(),
              sQuantidadePorUnidade  = $("#QuantidadePorUnidade").val(),
              dPrecoUnitario         = $("#PrecoUnitario").val(),
              iUnidadesEmEstoque     = $("#UnidadesEmEstoque").val(),
              iNivelDeReposicao      = $("#NivelDeReposicao").val(),
              sDescontinuado         = $("#Descontinuado").val();
    
          if(iIDProduto == "" || sNomeProduto== "") {
    
          } else {
            //enviado
          $.ajax({
            type: "PUT",
            url: "http://localhost:41121/api/produtos/"+ iIDProduto,
            data: JSON.stringify ({IDProduto : iIDProduto, NomeProduto : sNomeProduto, IDFornecedor : iIDFornecedor, IDCategoria : iIDCategoria, QuantidadePorUnidade : sQuantidadePorUnidade, PrecoUnitario : dPrecoUnitario, UnidadesEmEstoque : iUnidadesEmEstoque, NivelDeReposicao : iNivelDeReposicao, Descontinuado : sDescontinuado }),
            success: function(data) {
              alert("Alterado com Sucesso!");
            },
            contentType: "application/json",
            dataType: "json"
          }).then(res => {
            buscaDados();
          });
          }      
        });
      });
    };

    $("#gravar").click(function() {
      let iIDProduto             = $("#IDdoProduto").val(),
          sNomeProduto           = $("#NomeDoProduto").val(),
          iIDFornecedor          = $("#IDFornecedor").val(),
          iIDCategoria           = $("#IDCategoria").val(),
          sQuantidadePorUnidade  = $("#QuantidadePorUnidade").val(),
          dPrecoUnitario         = $("#PrecoUnitario").val(),
          iUnidadesEmEstoque     = $("#UnidadesEmEstoque").val(),
          iNivelDeReposicao      = $("#NivelDeReposicao").val(),
          sDescontinuado         = $("#Descontinuado").val();
        
      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:41121/api/produtos",
        data: JSON.stringify ({IDProduto : iIDProduto, NomeProduto : sNomeProduto, IDFornecedor : iIDFornecedor, IDCategoria : iIDCategoria, QuantidadePorUnidade : sQuantidadePorUnidade, PrecoUnitario : dPrecoUnitario, UnidadesEmEstoque : iUnidadesEmEstoque, NivelDeReposicao : iNivelDeReposicao, Descontinuado : sDescontinuado }),
        success: function(data) {
          
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
          alert("O produto foi cadastrado com sucesso!");
          window.location.href = "ConsultaProdutosWilliam";
      });
    }); 

    $("#adicionar").click(function(){
      window.location.href = "AdicionaProdutosWilliam";
    });        

    $("#cancelar").click(function(){
      window.location.href = "ConsultaProdutosWilliam";
    });
    
  
  } );
