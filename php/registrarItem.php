<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombreItem'];



/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO items (id, nombreItem)values(NULL, '$a')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */


?>

