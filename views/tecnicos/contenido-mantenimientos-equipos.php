<?php

include '../../php/config.php';
$conexion = retornarConexion();

session_start();
$usuario = $_SESSION['usuario'];

include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
include 'body-mantenimientos-equipos.php';
include 'footer.php'; 
?>
