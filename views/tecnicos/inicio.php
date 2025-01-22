<?php

session_start();
$usuario = $_SESSION['usuario'];
$estado =  $_SESSION['estado']; 
$id = $_SESSION['id'];

/* print_r($_SESSION);
 */

if (empty($_SESSION['usuario'])) {
    header('Location: ../../index.php?error=4');
    exit;
}

if($_SESSION['estado'] == '2'){
    header('Location: /helpdesk?error=5');
}

include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
include 'contenido.php';
include 'footer.php'; 


?>
            

