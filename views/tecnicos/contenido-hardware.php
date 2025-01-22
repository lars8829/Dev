<?php

session_start();
$usuario = $_SESSION['usuario'];


include '../../php/config.php';
$conexion = retornarConexion();


/* QUERY SELECT */
$sql_marcas =   "SELECT * FROM marcas";
$resultado_marcas = mysqli_query($conexion, $sql_marcas);

$sql_items =   "SELECT * FROM items";
$resultado_items = mysqli_query($conexion, $sql_items);

$sql_estados_hardware =   "SELECT * FROM estados_hardware";
$resultado_estados_hardware = mysqli_query($conexion, $sql_estados_hardware);

include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
include 'body-hardware.php';
include 'footer.php'; 

?>
