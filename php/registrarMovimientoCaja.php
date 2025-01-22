<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['descripcion'];
$b = $_POST['solicitud_usuario'];
$c = $_POST['nfactura'];
$d = $_POST['fecha_Movimiento'];
$e = $_POST['valor'];


/* $e = $_POST['archivo']; */

/* print_r($a);
 */
$sql = "INSERT INTO movimientos_caja_menor (descripcion, solicitud_usuario, nfactura, fecha_Movimiento, valor)values('$a','$b','$c','$d','$e')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>