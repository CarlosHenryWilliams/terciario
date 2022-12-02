<?php
function conectame()
{
	$server = "localhost";
	$usuario = "root";
	$password   = "";
	$database   = "terciario";
	$mysqli = new mysqli($server, $usuario, $password, $database);

	if (mysqli_connect_errno()) {
		echo "Error" . mysqli_connect_error();
		exit();
	}/*else{
			echo "Todo OK";
		}*/

	return $mysqli;
}