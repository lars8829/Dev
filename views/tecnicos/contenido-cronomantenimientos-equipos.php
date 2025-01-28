<?php

session_start();
$usuario = $_SESSION['usuario'];


include '../../php/config.php';
$conexion = retornarConexion();

$sql_items =   "SELECT * FROM items";
$resultado_items = mysqli_query($conexion, $sql_items);
mysqli_close($conexion);


include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
include 'body-cronograma-equipos.php';
include 'footer.php'; 

?>
