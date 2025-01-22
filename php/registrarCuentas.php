<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['ncuenta'];


/* $e = $_POST['archivo']; */

/* print_r($a);
 */
$sql = "INSERT INTO movimientos_cuentas (ncuenta)values('$a')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>