<?php

require_once "config.php";

$conexion = retornarConexion();
session_start();
/* print_r ($_SESSION); */
$id = $_SESSION['id'];

$a = $_POST['titulo'];
$d = $_POST['descripcion_cliente'];
#$id = $_POST['id_usuario'];

/* $e = $_POST['archivo']; */

/* print_r($_POST); */

$sql = "INSERT INTO novedades (titulo,
                            id_usuario,
                            descripcion_cliente,
                            id_estado_novedad
                            )
                            values('$a',
                            '$id',
                            '$d',
                            '1')";

echo $result = mysqli_query($conexion, $sql); 

/* echo $result; */

/* print $sql; */



?>