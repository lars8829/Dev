<?php

session_start();
$usuario = $_SESSION['usuario'];


include '../../php/config.php';
$conexion = retornarConexion();
include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';

include 'body-simcard.php';

include 'footer.php'; 

?>
