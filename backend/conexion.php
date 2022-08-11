<?php
	$conexion = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conexion, 'terciario');
	if (mysqli_connect_errno()) {

		echo "Error de conexion a la Base de Datos: " . mysqli_connect_error();
		exit();
	} else {
		echo "ok";
	}


	?>