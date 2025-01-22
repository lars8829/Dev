


<?php 

require_once "config.php";

$conexion = retornarConexion();

$a = $_POST['id'];
$b = $_POST['descripcion_tecnico'];
$c = $_POST['id_estado_novedad'];
/* $e = $_POST['archivo']; */

/* print_r($_POST);  */

$sql = "UPDATE novedades SET id='$a', descripcion_tecnico='$b', id_estado_novedad='$c' WHERE id='$a'";

echo $result = mysqli_query($conexion, $sql);

/* echo $result; */

?>


