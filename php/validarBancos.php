<?php

require ("config.php");
$conexion = retornarConexion();

$nombreBanco = $_POST['nombreBanco'];

$bancos = mysqli_query($conexion, "SELECT nombreBanco  FROM movimientos_bancos WHERE  nombreBanco LIKE '%$nombreBanco%'");

// Comprobar si se encontró algún registro
if (mysqli_num_rows($bancos) > 0) {
    // Si el nombre de usuario ya existe
    echo 1;   
} else {
    // Si el nombre de usuario no existe
    echo 0;
}
mysqli_close($conexion);

?>