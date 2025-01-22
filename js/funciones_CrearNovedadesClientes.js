function agregarNovedadesClientes(titulo, descripcion_cliente) {
  
  datos = "&titulo=" + titulo + "&descripcion_cliente=" + descripcion_cliente;

  //alert(datos);
  $.ajax({
    type: "POST",
    url: "../../php/agregarNovedadesClientes.php",
    data: datos,
    success: function (r) {
     /*  alert(r); */
      if (r == 1) {
        // para recargar pagina
        $("#tabla").load("../../componentes/tabla.solicitudes.clientes.php");
        alertify.success("Se registro con exito");
        /*  alert("ok"); */
      } else {
        alertify.error("Fail Error J101-Code");
        /* alert('fail'); */
      }
    }/* , */
  });
}



/* ------------------------------------------START--------------------------------------------------------- */

function agregarDatosNovedadesCliente(datos) {

  d = datos.split("||");
  $("#idx").val(d[0]);
  $("#descripcion_usuariox").val(d[7]);
  $("#descripcion_analistax").val(d[8]);

}
/* ---------------------------------------------END------------------------------------------------------ */



