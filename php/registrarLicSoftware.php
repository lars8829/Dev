<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['id_software'];
$b = $_POST['clave'];
$c = $_POST['clave_phone01'];
$d = $_POST['clave_phone02'];
$e = $_POST['id_distribuidor'];
$f = $_POST['id_item'];
$g = $_POST['id_estados_software'];

/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO movimientos_software (id_software, clave, clave_phone01, clave_phone02, id_distribuidor,id_item, id_estados_software)values('$a', '$b', '$c', '$d','$e','$f','$g')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>