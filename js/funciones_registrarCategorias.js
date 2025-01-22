function registrarCategorias(nombreCategoria){

    cadena = "nombreCategoria=" + nombreCategoria;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarCategorias.php",
        data:cadena,
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


