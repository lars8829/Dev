<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombreBanco'];


/* $e = $_POST['archivo']; */

/* print_r($a);
 */
$sql = "INSERT INTO movimientos_bancos (nombreBanco)values('$a')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>