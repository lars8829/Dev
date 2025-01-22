function registrarSoftware(nombreSoftware, categoria_id, fecha_adquisicion, arquitectura, sistema,licencias, descripcion){

    cadenaSoftware = "nombreSoftware=" + nombreSoftware + 
                     "&categoria_id=" + categoria_id +
                     "&fecha_adquisicion=" + fecha_adquisicion +
                     "&arquitectura=" + arquitectura +
                     "&sistema=" + sistema +
                     "&licencias=" + licencias +
                     "&descripcion=" + descripcion;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarSoftware.php",
        data:cadenaSoftware,
        success:function(r){
            /* console.log(r); */
            if(r==1){
                alertify.success('Agregado con exito');
            }
            else{
                alertify.error('No fue Agregado con exito');
            }
        }
    });
}

