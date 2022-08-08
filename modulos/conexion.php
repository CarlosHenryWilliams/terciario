<?php

function conectame()
{
    $server = "localhost";
    $usuario = "root";
    $pass   = "";
    $database   = "terciario";
    $mysqli = new mysqli($server, $usuario, $pass, $database);

    if (mysqli_connect_errno()) {
        echo "Error" . mysqli_connect_error();
        exit();
    }/*else{
			echo "Todo OK";
		}*/

    return $mysqli;
}