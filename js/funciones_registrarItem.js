
function registrarItem(nombreItem){

    cadenaItem= "&nombreItem=" + nombreItem;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarItem.php",
        data:cadenaItem,
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
