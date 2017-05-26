<?php
	function conectarse()
	{
		$servidor = "localhost";
		$usuario = "root";
		$contrasena = "Admin123";
		$bd = "tedba";
		$mysqli = new mysqli($servidor, $usuario, $contrasena, $bd);	
		if ($mysqli->connect_errno)
		{
			echo'ERROR CONECTANDO CON EL SERVIDOR: ' . $mysqli->connect_errno ;
			exit();
		}

		return $mysqli;
	}

conectarse();
?>
