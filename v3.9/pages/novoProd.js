$(document).ready(function(){
    var itemCont = 1;
    $("#novoProd").click(function(){
        var novoItem = $("#item").clone();

        // modifica o id do item recem criado
        $(novoItem).attr("id","item"+itemCont);
        var novoSelect = $(novoItem).children()[1];
        $(novoSelect).attr("id","produtoId"+itemCont);
        $(novoSelect).attr("name","produtoId"+itemCont);

        var novoSelect = $(novoItem).children()[3];
        $(novoSelect).attr("id","quant"+itemCont);
        $(novoSelect).attr("name","quant"+itemCont);

        $("#formulario").append(novoItem);
        itemCont++;
        $("#itemCont").val(itemCont);
    });
  });

  $(document).ready(function(){
      $("#novoProd").click(function(){
          var novoItem = $("#item").clone();
          var novoId = Math.floor((Math.random() * 100) + 1);

          // modifica o id do item recem criado
          $(novoItem).attr("id","item"+ novoId);
          var novoSelect = $(novoItem).children()[1];
          $(novoSelect).attr("id","produtoId"+ novoId);
          $(novoSelect).attr("name","produtoId"+ novoId);

          var novoSelect = $(novoItem).children()[3];
          $(novoSelect).attr("id","quant"+ novoId);
          $(novoSelect).attr("name","quant"+ novoId);

          $("#formulario").append(novoItem);
      });
    });
