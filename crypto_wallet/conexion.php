<?php

	function Conectar(){
		$servername = 'localhost';
		$database = 'cuentas';
		$username = 'root';
		$password = '';

			//conexion
		if (!($conexion = mysqli_connect($servername, $username, $password))) {
			//print("Error en la conexion");
			exit();
		}
		else{
			//print("Conexion exitosa");
		}

		//Seleccion BD
		if (!mysqli_select_db($conexion, $database)) {
			//print("Error al seleccionar la base de datos");
			exit();
		}
		else{
			//print("<br>Base de Datos Seleccionada");
		}
		return $conexion;
	}

	
?>