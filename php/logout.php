<?php
/* session_start();
session_unset();
session_destroy();
header('Location:  ../index.php?error=3');
exit();
 */
require("obtenerIp.php");
$ip = obtenerIP();


 session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // Obtener el ID del usuario
    $usuario_id = $_SESSION['id'];

    // Obtener la IP del usuario
    $ip = obtenerIP();

    // Registrar el cierre de sesión con la IP
    require("config.php");
    $conexion = retornarConexion();
    $accion = 'cierre';
    $stmt_log = $conexion->prepare("INSERT INTO logs_sesion (id_usuario, accion, ip_address) VALUES (?, ?, ?)");
    $stmt_log->bind_param("iss", $usuario_id, $accion, $ip);
    $stmt_log->execute();
    $stmt_log->close();

    // Destruir la sesión
    session_unset();
    session_destroy();

    // Redirigir al usuario al inicio de sesión
    header("Location: ../index.php?error=3");
} else {
    // Si no hay sesión activa, redirigir al inicio de sesión
    header("Location: ../index.php?error=3");
}


?>