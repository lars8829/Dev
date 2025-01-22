function registrarMarcas(nombremarca){
    cadenaMarcas = "nombremarca=" + nombremarca;
    
    $.ajax({
        type:"POST",
        url: "../../php/registrarMarcas.php",
        data:cadenaMarcas,
        success:function(r){
            if(r==1){
                alertify.success('Agregado con exito'); 
                }
            else{
                alertify.error('No fue Agregado con exito');
            }
        }
    });
}