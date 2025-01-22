<?php

require_once "config.php";

$conexion = retornarConexion();



$a = $_POST['serialElemento'];
$b = $_POST['id_categoriaElemento'];
$c = $_POST['id_marca'];
$d = $_POST['modeloElemento'];
$e = $_POST['fecha_adquisicion'];
$f = $_POST['id_asignatario'];
$g = $_POST['id_estado'];
$h = $_POST['id_sistemas_op'];
$i = $_POST['descripcionElemento'];



/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO elementos (id, serialElemento,id_categoriaElemento, id_marca, modeloElemento, fecha_adquisicion, id_asignatario, id_estado,id_sistemas_op, descripcionElemento)values(NULL, '$a', '$b', '$c', '$d','$e','$f','$g','$h','$i')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */


?>

