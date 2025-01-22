
<?php
require("config.php");
$conexion = retornarConexion();

$sql = "SELECT u.email, l.accion, l.fecha FROM logs_sesion l JOIN usuarios u ON l.id_usuario = u.id ORDER BY l.fecha DESC";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Usuario: " . $row['email'] . " - Acción: " . $row['accion'] . " - Fecha: " . $row['fecha'] . "<br>";
    }
} else {
    echo "No se encontraron registros.";
}
?>