<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');

$nombre_materia = $_POST['var_nombre_materia'];
$abreviatura_materia = $_POST['var_abreviatura_materia'];
$estadohabilitado = $_POST['var_estado_materia'];

$query = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estadohabilitado')";


$resultado  = mysqli_query(conectame(), $query);



$error = mysqli_error(conectame());

if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
    echo "1";
} else {
    echo '0';
}