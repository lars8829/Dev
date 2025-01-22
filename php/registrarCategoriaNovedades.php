<?php

require_once "config.php";
$conexion = retornarConexion();

if(isset($_POST['nombreCategoria'])){
    $a = $_POST['nombreCategoria'];
    /* print_r($a); */

    $sql = "INSERT INTO categorias (nombreCategoria)values('$a')";
    echo $result = mysqli_query($conexion, $sql); 
    }else{
    echo "No se ha recibido el nombre de la categoría";
}





 /* echo $result;  */



?>