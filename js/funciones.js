/* -------------------------------------------START-------------------------------------------------------- */
function agregarNovedades(titulo, id_peticiones, id_categorias, descripcion) {
  datos =
    "&titulo=" +
    titulo +
    "&id_peticiones=" +
    id_peticiones +
    "&id_categorias=" +
    id_categorias +
    "&descripcion=" +
    descripcion;

 /*  alert(datos); */

    $.ajax({
      type: "POST",
      url: "../../php/agregarNovedades.php",
      data: datos,
      success: function (r) {
        /* alert(r); */
        if (r == 1) {
          // para recargar pagina
          $("#tabla").load("../../componentes/tabla.solicitudes.Admin.php");
          alertify.success("Se registro con exito");
          /*  alert("ok"); */
        } else {
          alertify.error("Fail Error J101-Code");
          /* alert('fail'); */
        }
      }/* , */
    });
}

/* -------------------------------------------END-------------------------------------------------------- */