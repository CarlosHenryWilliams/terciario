<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */


$taller = $_POST['taller'];
$ano = $_POST['ano'];




/**
 * Hace una consulta para seleccionar los DNI y si detecta un dni igual te redirige al index de nuevo
 * mysqli_num_rows verifica el numero de filas que consiguio, por ende si es mayor que 0 (O sea si existe ese DNI) 
 */

$verificarnombretaller = mysqli_query(conectame(), "SELECT * FROM talleres WHERE nombre_taller='$taller'");


if (mysqli_num_rows($verificarnombretaller) > 0) {
    header('Location: ../talleres.php?tallerrepetido=1');
    exit(); //EL exit(); Hace que si llega ahi termina el codigo y lo de abajo no interesa, no lo va a ejecutar.
}


$query = conectame()->query("INSERT INTO talleres (nombre_taller, ano) VALUES('$taller', '$ano')");
if (!$query) {
    die("ERROR");
}


header("Location:../talleres.php?t=1");