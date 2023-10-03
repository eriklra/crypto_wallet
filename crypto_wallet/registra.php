<?php
	include("conexion.php");
	
	$correo = $_REQUEST['email'];
	$contra = $_REQUEST['pass'];
	$nombre = $_REQUEST['nom'];
	$apellido = $_REQUEST['ape'];
	$celular = $_REQUEST['cel'];
	$link = Conectar();
	
	//print("$correo <br>");
	//print("$contra <br>");


	if ($correo == '' || $contra == ''|| $nombre == ''||$apellido == ''|| $celular == '')
	{
		header("location:registro.php");
	}
	else
	{
			//CHECA DATOS REPETIDOS
		$query = "SELECT correo, contraseña FROM usuarios WHERE correo = '".$correo."'";
		$consulta = mysqli_query($link,$query);
		$datos = mysqli_num_rows($consulta);
		if($datos >= 1)
		{
			header("location:registro.php");
		}
		else
		{
				//REGISTRO DEL NUEVO USUARIO		
				$queryin = "INSERT INTO usuarios VALUES('$correo', '$contra', 0, 0, 0, 0, '$nombre', '$apellido', $celular)";
				mysqli_query($link,$queryin);
				header("location:email.php");
		}
	}

	
	/*$queryin = "INSERT INTO usuarios VALUES('$correo', '$contra')";
	mysqli_query($link,$queryin);
	header("location:email.html");*/
?>