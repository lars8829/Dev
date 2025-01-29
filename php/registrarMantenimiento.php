<?php

require_once "config.php";
$conexion = retornarConexion();

$a = $_POST['ide'];
$b = $_POST['id_tipo_mtto'];
$c = $_POST['id_tecnicos'];
$d = $_POST['id_ciclo'];
$e = $_POST['revision'];
$f = $_POST['actividades'];
$g = $_POST['resultado'];
$h = $_POST['id_mtto'];

/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO mtto_equipos( id_elemento, id_tipo_mtto, id_tecnicos, id_ciclo, revision, actividades, resultado, id_mtto)values('$a','$b','$c','$d','$e','$f','$g','$h')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */

?>