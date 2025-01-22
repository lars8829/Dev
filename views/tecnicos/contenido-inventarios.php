<?php

include '../../php/config.php';
$conexion = retornarConexion();

session_start();
$usuario = $_SESSION['usuario'];


$sql_marcas = "SELECT * FROM marcas";
$resultado_marcas = mysqli_query($conexion, $sql_marcas);
/* mysqli_close($conexion); */

$sql_software =   "SELECT * FROM sistemas_op";
$resultado_software = mysqli_query($conexion, $sql_software);
/* mysqli_close($conexion); */

$sql_categorias_elemento =   "SELECT * FROM categoriaelementos";
$resultado_elementos = mysqli_query($conexion, $sql_categorias_elemento);
/* mysqli_close($conexion); */

$sql_items =   "SELECT * FROM items";
$resultado_items = mysqli_query($conexion, $sql_items);
/* mysqli_close($conexion); */

$sql_estados_hardware =   "SELECT * FROM estados_hardware";
$resultado_estados_hardware = mysqli_query($conexion, $sql_estados_hardware);
/* mysqli_close($conexion); */

include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
include 'body-inventarios.php';
include 'footer.php'; 

?>
