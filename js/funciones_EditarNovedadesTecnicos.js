/* -------------------------------------------START-------------------------------------------------------- */
function actualizaDatosNovedades() {
      /* alert("ejecutando codigo"); */
      var id = $("#id").val();
      var id_peticiones = $("#id_peticiones").val();
      var id_categorias = $("#id_categorias").val();
      var id_estado_novedad = $("#id_estado_novedadu").val();
    
      var cadena = "id=" + id + 
                   "&id_peticiones=" + id_peticiones +
                   "&id_categorias=" + id_categorias +
                  "&id_estado_novedad=" + id_estado_novedad;

      /* alert(cadena); */

      $.ajax({
        type: "POST",
        url: "../../php/actualizaDatosNovedad.php",
        data: cadena,
        success: function (r) {
            /* alert(r); */
          if (r == 1) {
            location.href = "../../views/tecnicos/inicio.php";
            /* $('#datatablesSimple').load('../../views/tecnicos/inicio.php'); */
            alertify.success("Se registro con exito");
          } else {
            alertify.error("Fallo en la transacion :( ");
          }
        },
      });
    }
/* ------------------------------------------END--------------------------------------------------------- */

/* ------------------------------------------START--------------------------------------------------------- */
function agregarDatosFormularioNovedades(datos1) {
  alert(datos1);
 
    d = datos1.split("||");
    $("#idu").val(d[0]); 
    $("#id_usuariou").val(d[1]);
    $("#titulou").val(d[2]);
    $("#descripcionu").val(d[3]);
    $("#fecha_upu").val(d[5]);
    $("#id_estado_novedadu").val(d[6]); 
   
  }
/* ---------------------------------------------END------------------------------------------------------ */

/* ---------------------------------------------START------------------------------------------------------ */
  function agregarDatosFormularioSolicitudes(datos2) {
   /*  alert(datos2); */
    d = datos2.split("||");
    $("#ida").val(d[0]);
    $("#id_usuarioa").val(d[1]);
    $("#tituloa").val(d[2]);
    $("#descripcion_clientea").val(d[5]);
    $("#fecha_upa").val(d[3]);
   /*  $("#id_estado_novedada").val(d[4]); */
   /*  $('#descripcion_tecnicoa').val(d[6]); */
    
   // alert(datos2);
    /*funcion para Cargar datos de la base de datos al formulario  */
  }
/* ---------------------------------------------END------------------------------------------------------ */

/* ---------------------------------------------START------------------------------------------------------ */
function actualizaDatosSolicitudes() {

  var id = $("#ida").val();
  var descripcion_tecnico =  $("#descripcion_tecnico").val();
  var id_estado_novedad = $("#id_estado_novedad").val();
  if (descripcion_tecnico == "" || id_estado_novedad == "") {
    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")  
    alertify.error("Fallo en la transacion :( ");                      
  }else{
    var cadena =
    "id=" +
    id +
    "&descripcion_tecnico=" +
    descripcion_tecnico +
    "&id_estado_novedad=" +
    id_estado_novedad;
 /*  alert(cadena); */
  $.ajax({
    type: "POST",
    url: "../../php/actualizaDatosNovedadSolicitud.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        location.href = "../../views/tecnicos/inicio.php";
        /* $('').load('../../views/tecnicos/inicio.php'); */
        alertify.success("Se registro con exito");
      } else {
        alertify.error("Fallo en la transacion :( ");
      }
    }
  }); 
  }
// pendiente
 
}
/* ---------------------------------------------END------------------------------------------------------ */
/* ---------------------------------------------START------------------------------------------------------ */
  function agregarDatosFormularioIncidentes(datos3) {
    d = datos3.split("||");
    $("#idb").val(d[0]);
    $("#id_usuariob").val(d[1]);
    $("#titulob").val(d[2]);
    $("#descripcion_clienteb").val(d[5]);
    $("#fecha_upb").val(d[3]);
    /* $("#id_estado_novedadb").val(d[5]); */
    /* $('#id_peticionesu').val(d[2]);
          $('#id_categoriasu').val(d[3]); */
    /* alert(datos3); */
    /*funcion para Cargar datos de la base de datos al formulario  */
  }
/* ---------------------------------------------END------------------------------------------------------ */



/* ---------------------------------------------START------------------------------------------------------ */
function actualizaDatosIncidentes() {
/* alert("si pasa"); */
  var id = $("#idb").val();
  var descripcion_tecnico =  $("#descripcion_tecnicob").val();
  var id_estado_novedad = $("#id_estado_novedadb").val();
  if (descripcion_tecnico == "" || id_estado_novedad == "") {
    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")  
    alertify.error("Fallo en la transacion :( ");                      
  }else{
    var cadena =
    "id=" +
    id +
    "&descripcion_tecnico=" +
    descripcion_tecnico +
    "&id_estado_novedad=" +
    id_estado_novedad;
  /* console.log(cadena); */
  $.ajax({
    type: "POST",
    url: "../../php/actualizaDatosNovedadIncidente.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        location.href = "../../views/tecnicos/inicio.php";
        /* $('').load('../../views/tecnicos/inicio.php'); */
        alertify.success("Se registro con exito");
      } else {
        alertify.error("Fallo en la transacion :( ");
      }
    }
  });
  }
// pendiente
 
}
/* ---------------------------------------------END------------------------------------------------------ */



function registrarNuevaCategoria(nombreCategoria) {
  /* alert("si pasa"); */

  cadena = "nombreCategoria=" + nombreCategoria;
   alert(cadena);
    $.ajax({
      type: "POST",
      url: "../../php/registrarCategoriaNovedades.php",
      data: cadena,
      success: function (r) {
        /* alert(r); */
        if (r == 1) {
          location.href = "../../views/tecnicos/inicio.php";
          /* $('').load('../../views/tecnicos/inicio.php'); */
          alertify.success("Se registro con exito");
        } else {
          alertify.error("Fallo en la transacion :( ");
        }
      }
    });
  }





