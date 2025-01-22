function registrarMovimientoCaja(descripcion, solicitud_usuario, nfactura, fecha_Movimiento, valor){

    registroCaja = "descripcion=" + descripcion + 
                     "&solicitud_usuario=" + solicitud_usuario +
                     "&nfactura=" + nfactura +
                     "&fecha_Movimiento=" + fecha_Movimiento +
                     "&valor=" + valor;
/* alert(registroCaja); */
                     $.ajax({
                        type:"POST",
                        url: "../../php/registrarMovimientoCaja.php",
                        data:registroCaja,
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


function registrarM_Usuarios(nombres){

    cadenaUsuarios = "nombres=" + nombres +
    "&ncuenta=" + ncuenta +
    "&id_banco=" + id_banco;

    $.ajax({
        type:"POST",
        url: "../../php/registrarUsuarios.php",
        data:cadenaUsuarios,
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


function registrarM_Bancos(nombreBanco){

    cadenaBancos = "nombreBanco=" + nombreBanco;

    $.ajax({
        type:"POST",
        url: "../../php/validarBancos.php",
        data:cadenaBancos,
        success:function(r){
          //alert(r); 
            if(r==0){
/*                 alertify.success('Se procede a registrar Banco');
                 */
                $.ajax({
                    type:"POST",
                    url: "../../php/registrarBancos.php",
                    data:cadenaBancos,
                    success:function(r){
                      //alert(r); 
                        if(r==1){
                            alertify.success('Agregado con Exito');   
                        }
                        else{
                            alertify.error('Problemas al Crear el Registro');
                        }
                    }
                });
    
            }
            else{
                alertify.error('El Banco ya se encuentra registrado');
            }
        }
    });
}



function registrarM_Cuentas(ncuenta){

    cadenaCuentas = "ncuenta=" + ncuenta;

    $.ajax({
        type:"POST",
        url: "../../php/registrarCuentas.php",
        data:cadenaCuentas,
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


function convertirMayusculas(input){
    input.value = input.value.toUpperCase();

}





