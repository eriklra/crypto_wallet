<?php
	include("conexion.php");
	
	session_start();
	if(isset($_SESSION['USUARIO'])){
		header("location:menuPrincipal.php");
	}
	
	$correo = $_REQUEST['em'];
	$contra = $_REQUEST['contr'];

	
	//print("correo: $correo <br>");
	//print("contra: $contra <br>");

	$link = Conectar();
	$query = "SELECT correo, contraseña FROM usuarios WHERE correo = '".$correo."'";
	$consulta = mysqli_query($link,$query);
	$datos = mysqli_num_rows($consulta);
	print("datos[$datos]");

	//if(isset($_SESSION['USUARIO'])){
		if($datos == 1)
		{
			while ($fila = mysqli_fetch_row($consulta)) {
				if($fila[1] == $contra)
				{
					$_SESSION['USUARIO'] = $correo;
					//print("<br>Acceso concedido");
					header("location:menuPrincipal.php");
				}
				else
				{
					//print("<br>Contraseña incorrecta");
					
					
					
					header("location:login.php");
				}
				//print("<br>$fila[1]");
			}
		}
		elseif($datos > 1)
		{
			//print("<br>Error al consultar la base de datos");
			header("location:login.php");
		}
		elseif($datos == 0)
		{
			//print("<br>El usuario no existe");
			header("location:login.php");
		}
	//}

	
	/*print("<br> $query");
	print("<br> $datos");
	$query = "SELECT * FROM usuarios";
	$consulta = mysqli_query($link,$query);
	$datos = mysqli_num_rows($consulta);
	print("<br>El numero de registros es: $datos");*/
?>