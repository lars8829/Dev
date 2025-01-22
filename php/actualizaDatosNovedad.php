<?php 

require_once "config.php";

$conexion = retornarConexion();

$a = $_POST['id'];
$b = $_POST['id_peticiones'];
$c = $_POST['id_categorias'];
$d = $_POST['id_estado_novedad'];
/* $e = $_POST['archivo']; */

/* print_r($_POST);  */

$sql = "UPDATE novedades SET id='$a', id_peticiones='$b', id_categorias='$c', id_estado_novedad='$d' WHERE id='$a'";

echo $result = mysqli_query($conexion, $sql);

/* echo $result; */

?>


