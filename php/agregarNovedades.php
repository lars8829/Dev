<?php


require_once "config.php";

$conexion = retornarConexion();

$a = $_POST['titulo'];
$b = $_POST['id_peticiones'];
$c = $_POST['id_categorias'];
$d = $_POST['descripcion'];
$e = $_POST['id'];
/* $e = $_POST['archivo']; */

/* print_r($_POST); */

$sql = "INSERT INTO novedades (titulo,
                            id_peticiones,
                            id_categorias,
                            id_usuario,
                            descripcion,
                            id_estado_novedad
                            )
                            values('$a',
                            '$b',
                            '$c',
                            '$e',
                            '$d',
                            '1')";

echo $result = mysqli_query($conexion, $sql); 

echo $result;



?>