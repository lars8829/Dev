$('#registrarMantenimientos').click(function(){
    ide = $('#ide').val();
    id_tipo_mtto = $('#id_tipo_mtto').val();
    id_tecnicos = $('#id_tecnicos').val();
    id_ciclo = $('#id_ciclo').val();
    revision = $('#revision').val();
    actividades = $('#actividades').val();
    resultado = $('#resultado').val();
    id_mtto = $('#id_mtto').val();
registrarMantenimiento(ide, id_tipo_mtto, id_tecnicos, id_ciclo, revision, actividades, resultado, id_mtto);

});

function registrarMantenimiento(ide, id_tipo_mtto, id_tecnicos, id_ciclo, revision, actividades, resultado, id_mtto){
   
    cadenaMantenimiento= "ide=" + ide + 
                     "&id_tipo_mtto=" + id_tipo_mtto +
                     "&id_tecnicos=" + id_tecnicos +
                     "&id_ciclo=" + id_ciclo +
                     "&revision=" + revision +
                     "&actividades=" + actividades +
                     "&resultado=" + resultado +
                     "&id_mtto="+ id_mtto
    
            $.ajax({
                type:"POST",
                url: "../../php/registrarMantenimiento.php",
                data:cadenaMantenimiento,
                success:function(r){
                    /* console.log(r); */
                   /*  alert(r); */
                    if(r==1){
                        alertify.success('Agregado con exito');
                    }
                    else{
                        alertify.error('No fue Agregado con exito');
                    }
                }
            });

    
}

/* ------------------------------------------START--------------------------------------------------------- */

function asignarDatosMantenimiento(mantenimientos) {

    d = mantenimientos.split("||");
    $("#ide").val(d[0]);
  
  }
  /* ---------------------------------------------END------------------------------------------------------ */
  
  
  /* ------------------------------------------START--------------------------------------------------------- */

function asignarDatoRevisiones(mantenimientos) {

    d = mantenimientos.split("||");
    $("#idf").val(d[0]);
    $("#revisionf").val(d[6]);
    $("#actividadesf").val(d[7]);
    $("#resultadof").val(d[8]);

   
  
  }
  /* ---------------------------------------------END------------------------------------------------------ */
  