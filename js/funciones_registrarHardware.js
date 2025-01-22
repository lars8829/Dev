function registrarHardware(nombreHardware,id_marca,serialHardware,capacidadHardware,id_estado,id_asignatario,descripcionHardware){

    cadenaHardware = "nombreHardware=" + nombreHardware + 
                     "&id_marca=" + id_marca +
                     "&serialHardware=" + serialHardware +
                     "&capacidadHardware=" + capacidadHardware +
                     "&id_estado=" + id_estado +
                     "&id_asignatario=" + id_asignatario +
                     "&descripcionHardware=" + descripcionHardware;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarHardware.php",
        data:cadenaHardware,
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



