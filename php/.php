<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['nombreSoftware'];
$b = $_POST['categoria_id'];
$c = $_POST['fecha_adquisicion'];
$d = $_POST['arquitectura'];
$e = $_POST['sistema'];
$f = $_POST['licencias'];
$g = $_POST['descripcion'];

/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO software (id, nombreSoftware, categoria_id, fecha_adquisicion, arquitectura, sistema, licencias,descripcion)values(NULL, '$a', '$b', '$c', '$d','$e','$f','$g')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>