var ultimoId;
$(document).ready(function() {
  mostrarProdutos();
  });

function mostrarProdutos(){
  $.getJSON("http://127.0.0.1:41121/api/produto", function(data, status) {
  var items = [];
  $.each(data, function(key, val) {
    items.push(val);
  });
  //limpa tabela
  $("#tabela01 td").parent().remove();
  var tabela = "";
  for (var i=0; i<items.length; i++){
      tabela += "<tr><td>"+items[i].IDProduto+"</td>"+
              "<td>"+items[i].NomeProduto+"</td>"+
              "<td>"+items[i].IDFornecedor+"</td>"+
              "<td>"+items[i].IDCategoria+"</td>"+
              "<td>"+items[i].QuantidadePorUnidade+"</td>"+
              "<td>"+items[i].PrecoUnitario+"</td>"+
              "<td>"+items[i].UnidadesEmEstoque+"</td>"+
              "<td>"+items[i].UnidadesEmOrdem+"</td>"+
              "<td>"+items[i].NivelDeReposicao+"</td>"+
              "<td>"+items[i].Descontinuado+"</td>"+
              "<td><a class='btn' onclick='editarProduto("+items[i].IDProduto+");'><i class='fa fa-edit'></i></a>" +
              "<a class='btn' onclick='excluiProduto("+items[i].IDProduto+");'><i class='fa fa-trash'></i></a></td></tr>"
  }
  ultimoId = items[items.length-1].IDProduto;
  $("#tabela01").append(tabela);
  });
};

function excluiProduto(id){
    $.ajax({
      type: "DELETE",
      url: "http://127.0.0.1:41121/api/produto/"+id,
    }).then(res =>{
      mostrarProdutos();
      //$("#buscar").click();
    })
}
function editarProduto(id){
  $.getJSON("http://127.0.0.1:41121/api/produto/"+id, function(data, status) {
    var itemAltera = [];
    $.each(data, function(key, val) {
      itemAltera.push(val);
    });
    $("#idProdutoAltera").val(itemAltera[0]);
    $("#nomeProdutoAltera").val(itemAltera[1]);
    $("#alterarForm").modal("show");
    $("#alterar").click(function(){
      alterarProduto(id);
    })
  })
};

function alterarProduto(id){
  $.ajax({
    type: "PUT",
    url: "http://127.0.0.1:41121/api/produto/"+id,
    data: 'IDProduto=' +$("#idProdutoAltera").val()+ '&NomeProduto=' +$("#nomeProdutoAltera").val(),
    success: function(data) {
      mostrarProdutos();
    },
  }).then(res => {
    $("#idProdutoAltera").val("");
    $("#nomeProdutoAltera").val("");
    $("#alterarForm").modal("hide");
  });
}

$("#cadastrar").click(function() {
  $.ajax({
    type: "POST",
    url: "http://127.0.0.1:41121/api/produto",
    data: 'IDProduto=' +$("#idProduto").val()+ '&NomeProduto=' +$("#nomeProduto").val(),
    success: function(data) {
      mostrarProdutos();
    },
  }).then(res => {
    $("#idProduto").val("");
    $("#nomeProduto").val("");
    $("#cadastrarForm").modal("hide");
  });
});

$("#adicionar").click(function() {
  $("#idProduto").val(ultimoId+1);
  $("#cadastrarForm").modal('show');
});