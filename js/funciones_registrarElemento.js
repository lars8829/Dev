
function registrarElemento(serialElemento, id_categoriaElemento, id_marca, modeloElemento, fecha_adquisicion, id_asignatario, id_estado,id_sistemas_op,descripcionElemento){

    cadenaElementos = "serialElemento=" + serialElemento + 
                      "&id_categoriaElemento=" + id_categoriaElemento +
                     "&id_marca=" + id_marca +
                     "&modeloElemento=" + modeloElemento +
                     "&fecha_adquisicion=" + fecha_adquisicion +
                     "&id_asignatario=" + id_asignatario +
                     "&id_estado=" + id_estado +
                     "&id_sistemas_op=" + id_sistemas_op +
                     "&descripcionElemento=" + descripcionElemento;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarElemento.php",
        data:cadenaElementos,
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


/* ------------------------------------------START--------------------------------------------------------- */

function asignarElemento(datos1) {
    //alert(datos1);
    d = datos1.split("||");
    $("#idz").val(d[0]);
    $("#serialElementoz").val(d[1]);
    $("#modeloElementoz").val(d[2]);
    $("#tipoDispositivoz").val(d[3]);
    
}
/* ---------------------------------------------END------------------------------------------------------ */

/* ------------------------------------------START--------------------------------------------------------- */

function registrarMovimiento(id_elemento, id_estado_hardware, items_asignatario, descripcionElemento) {
    
    cadenaMovimientos =  "&id_elemento=" + id_elemento + 
                          
                            "&id_estado_hardware=" + id_estado_hardware +
                            "&items_asignatario=" + items_asignatario +
                            "&descripcionElemento=" + descripcionElemento;

    $.ajax({
        type:"POST",
        url: "../../php/registrarMovimiento.php",
        data:cadenaMovimientos,
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
/* ---------------------------------------------END------------------------------------------------------ */


