<?php

require_once "config.php";

$conexion = retornarConexion();




$d = $_POST['items_asignatario'];
$e = $_POST['id_elemento'];
$f = $_POST['id_estado_hardware'];
$g = $_POST['descripcionElemento'];



/* $e = $_POST['archivo']; */

/* print_r($a); */

$sql = "INSERT INTO movimientos_elementos(id,
                                             
                                              items_asignatario, 
                                              id_elemento,
                                               id_estado_hardware,
                                                descripcionElemento)values(NULL,'$d','$e','$f','$g')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */


?>