<?php

session_start();
$usuario = $_SESSION['usuario'];

include '../../php/config.php';
$conexion = retornarConexion();

include 'header-contabilidad.php';
include 'nav.php';
include 'menu.php';
include 'body-cajamenor.php';
include 'footer.php'; 
?>






