<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');

$nombre_materia = $_POST['var_nombre_materia'];
$abreviatura_materia = $_POST['var_abreviatura_materia'];
$estadohabilitado = $_POST['var_estado_materia'];

$query = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estadohabilitado')";

$resultado = mysqli_query(conectame(), $query);

/**
 * Hace una consulta para seleccionar los DNI y si detecta un dni igual te redirige al index de nuevo
 * mysqli_num_rows verifica el numero de filas que consiguio, por ende si es mayor que 0 (O sea si existe ese DNI) 
 */

// $verificarnombretaller = mysqli_query(conectame(), "SELECT * FROM talleres WHERE nombre_taller='$taller'");


// if (mysqli_num_rows($verificarnombretaller) > 0) {
//     header('Location: ../talleres.php?tallerrepetido=1');
//     exit(); //EL exit(); Hace que si llega ahi termina el codigo y lo de abajo no interesa, no lo va a ejecutar.
// }


// $query = conectame()->query("INSERT INTO talleres (nombre_taller, ano) VALUES('$taller', '$ano')");
// if (!$query) {
//     die("ERROR");
// }


// header("Location:../talleres.php?t=1");