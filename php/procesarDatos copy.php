<?php

require ("config.php");
$conexion = retornarConexion();

$email = $_POST['email'];
$password = $_POST['password'];

#ARRAY PARA CAPTURAR ERRORES 
/* $errores = []; */

#$resultado = mysqli_query($conexion,"SELECT email, password, id_estado FROM usuarios WHERE email='$email' and password='$password'");
$roles = mysqli_query($conexion, "SELECT id, id_rol, id_estado, email FROM usuarios WHERE email='$email' and password='$password'");

//print_r($roles);

 session_start();

/*$timeout_duration = 300;

if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout_duration)){
	
} */

if ($roles->num_rows > 0) {

		$fila = $roles->fetch_assoc();

		/* $rol = $fila['id_rol'];
		$estado = $fila['id_estado'];
		$usuario = $fila['email'];
		$id = $fila['id']; ANTERIOR CODIGO */
		
/* print "ID:".$fila['id']; */

		/* session_start(); */
		/* $_SESSION['usuario'] = $usuario;
		$_SESSION['rol']     = $rol;
		$_SESSION['estado']  = $estado;
		$_SESSION['id'] = $id; ANTERIOR CODIGO */

		/* print_r($_SESSION);

		print($estado);

		echo $id; */
		$_SESSION['usuario'] = $fila['email'];
		$_SESSION['rol'] = $fila['id_rol'];
		$_SESSION['estado'] = $fila['id_estado'];
		$_SESSION['id'] = $fila['id'];

		if ($fila ['id_estado'] == 1) {
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
		} else {
			header("Location:  /helpdesk_Desarrollo?error=1");
			}
		} else{
			header("Location: /helpdesk_Desarrollo?error=2");
		}


		/* if ($estado == 1) {
			switch ($rol){
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
		} else {
			header("Location:  /helpdesk_Desarrollo?error=1");
			}
} else{
	header("Location: /helpdesk_Desarrollo?error=2");
	} */

	
?>