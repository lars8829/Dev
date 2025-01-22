<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombremarca'];



/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO marcas (id,  nombremarca)values(NULL, '$a')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */


?>