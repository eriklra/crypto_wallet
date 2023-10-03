<?php 
	include("conexion.php");

	$link = Conectar();
	//$query = "SELECT Ethereum, Bitcoin, Litecoin, Cardano FROM usuarios WHERE correo = '".$usuario."'";
	$query = "SELECT Ethereum, Bitcoin, Litecoin, Cardano FROM usuarios WHERE correo = '".$_SESSION['USUARIO']."'";
	
	$consulta = mysqli_query($link,$query);
	$datos = mysqli_num_rows($consulta);
	$moneda1;
	$moneda2;
	$moneda3;
	$moneda4;
	$contador=0;
	if($datos == 1)
	{	
		while ($fila = mysqli_fetch_row($consulta)) {
			$moneda1 = $fila[0];
			$moneda2 = $fila[1];
			$moneda3 = $fila[2];
			$moneda4 = $fila[3];
		} 
		
	}
	if($moneda1>=1){
			$contador++;
		}
		if($moneda2>=1){
			$contador++;
		}
		if($moneda3>=1){
			$contador++;
		}
		if($moneda4>=1){
			$contador++;
		}

	function monedasAc(){
		$GLOBALS['e'] = $GLOBALS['contador'];
		return $GLOBALS['e'];
	}	
	function moneda1(){
		$GLOBALS['a'] = $GLOBALS['moneda1'];
		return $GLOBALS['a'];
	}
	function moneda2(){
		$GLOBALS['b'] = $GLOBALS['moneda2'];
		return $GLOBALS['b'];
	}

	function moneda3(){
		$GLOBALS['c'] = $GLOBALS['moneda3'];
		return $GLOBALS['c'];
	}
	function moneda4(){
		$GLOBALS['d'] = $GLOBALS['moneda4'];
		return $GLOBALS['d'];
	}
	
		
?>