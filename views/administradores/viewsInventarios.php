<?php

session_start();
$usuario = $_SESSION['usuario'];
$estado =  $_SESSION['estado']; 
$id = $_SESSION['id'];

include '../../php/config.php';
$conexion = retornarConexion();

$sql_marcas =   "SELECT * FROM marcas";
$resultado_marcas = mysqli_query($conexion, $sql_marcas);

$sql_software =   "SELECT * FROM sistemas_op";
$resultado_software = mysqli_query($conexion, $sql_software);

$sql_categorias_elemento =   "SELECT * FROM categoriaelementos";
$resultado_elementos = mysqli_query($conexion, $sql_categorias_elemento);

$sql_items =   "SELECT * FROM items";
$resultado_items = mysqli_query($conexion, $sql_items);

$sql_estados_hardware =   "SELECT * FROM estados_hardware";
$resultado_estados_hardware = mysqli_query($conexion, $sql_estados_hardware);


include 'header-admin.php';
include 'nav.php';
include 'menu.php';
include 'allinventarios.php';
include 'footer.php'; 


?>