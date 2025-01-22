<?php

require_once "config.php";

$conexion = retornarConexion();


$a = $_POST['elementoCategoria'];

/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO categoriaelementos (id, nombreCategoria)values(NULL, '$a')";



echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */



?>