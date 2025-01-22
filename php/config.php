<?php

function retornarConexion(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ai";

	$conexion = mysqli_connect($servername,$username,$password,$dbname);
	return $conexion;
	}


?>