<?php

require("obtenerIp.php");
$ip = obtenerIP();

require ("config.php");
$conexion = retornarConexion();

$email = $_POST['email'];
$password = $_POST['password'];
$stmt = $conexion->prepare("SELECT id, id_rol, id_estado, email FROM usuarios WHERE email=? and password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

		$fila = $resultado->fetch_assoc();
		session_start();
		$_SESSION['usuario'] = $fila['email'];
		$_SESSION['rol'] = $fila['id_rol'];
		$_SESSION['estado'] = $fila['id_estado'];
		$_SESSION['id'] = $fila['id'];

		 // Obtener la IP del usuario
		 $ip = obtenerIP();

		// Registrar el inicio de sesión con la IP
		$usuario_id = $fila['id'];
		$accion = 'inicio';
		$stmt_log = $conexion->prepare("INSERT INTO logs_sesion (id_usuario, accion, ip_address) VALUES (?, ?, ?)");
		$stmt_log->bind_param("iss", $usuario_id, $accion, $ip);
		$stmt_log->execute();
		$stmt_log->close();

		if ($fila['id_estado'] == 1) {

			switch ($fila['id_rol']){
				case 1:
					header("Location: ../views/administradores/admin.php");
					break;
				case 2:
					header("Location: ../views/tecnicos/inicio.php");
					break;
				case 3:
					header("Location: ../views/clientes/inicio.php");
					break;
				case 4:
					header("Location: ../views/contabilidad/inicio.php");
					break;
				}
		}else {
			header("Location:  /helpdesk_Desarrollo?error=1");
			}
    }else{
        header("Location: /helpdesk_Desarrollo?error=4");
}	

$stmt->close();





?>









