
function registrarCategoriasElemento(elementoCategoria){

    cadenaCategoriasElemento = "elementoCategoria=" + elementoCategoria;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarCategoriasElemento.php",
        data:cadenaCategoriasElemento,
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