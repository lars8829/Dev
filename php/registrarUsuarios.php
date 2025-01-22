<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombres'];
$b = $_POST['ncuenta'];
$c = $_POST['id_banco'];



/* $e = $_POST['archivo']; */

/* print_r($a);
 */
$sql = "INSERT INTO movimientos_usuarios (nombres, ncuenta, id_banco)values('$a','$b','$c')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>