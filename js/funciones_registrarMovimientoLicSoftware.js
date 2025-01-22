function registrarMovimientoLicSoftware(id_software, clave, clave_phone01, clave_phone02,id_distribuidor, id_item, id_estados_software){

    cadenaLicSoftware = "id_software=" + id_software + 
                     "&clave=" + clave +
                     "&clave_phone01=" + clave_phone01 +
                     "&clave_phone02=" + clave_phone02 +
                     "&id_distribuidor=" + id_distribuidor +
                     "&id_item=" + id_item +
                     "&id_estados_software=" + id_estados_software;

                     /* alert(cadenaLicSoftware); */
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarLicSoftware.php",
        data:cadenaLicSoftware,
        success:function(r){
            /* console.log(r); */
          /*   alert(r); */
            if(r==1){
                alertify.success('Agregado con exito');
            }
            else{
                alertify.error('No fue Agregado con exito');
            }
        }
    });
}

