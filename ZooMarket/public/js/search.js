// window.onload = function() {

  var buscador = $("#table").DataTable();
  $("#input-search").keyup(function(){

    // console.log($("#input-search").val());

    buscador.search($(this).val()).draw();

    if ($("#input-search").val() == ""){
        $(".content-search").fadeOut(300);
    }else{
        $(".content-search").fadeIn(300);
    }
  })
// }
