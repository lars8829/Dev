<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombreHardware'];
$b = $_POST['id_marca'];
$c = $_POST['serialHardware'];
$d = $_POST['capacidadHardware'];
$e = $_POST['id_estado'];
$f = $_POST['id_asignatario'];
$g = $_POST['descripcionHardware'];


/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO hardware (id, nombreHardware, id_marca, serialHardware, capacidadHardware, id_estado, id_asignatario, descripcionHardware)values(NULL, '$a', '$b', '$c', '$d','$e','$f','$g')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */


?>

