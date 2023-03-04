function cambioPage(valor){
    if(valor == "catalogo"){ur = "catalogo.php"}
    if(valor == "compras"){ur = "compras.php"}

    $.ajax({
        type: 'POST',
        url: ur,
        success: function(res) {
            $("#borrame").remove();
            $("#home").html(res);
        }
    });
}

$(function() {
    // elementos de la lista
    var menues = $("#listaUnica li"); 
  
    // manejador de click sobre todos los elementos
    menues.click(function() {
       // eliminamos active de todos los elementos
       menues.removeClass("active");
       // activamos el elemento clicado.
       $(this).addClass("active");
    });
  
  });