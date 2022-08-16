<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');

$id_materia = $_POST['var_id_materia'];

$query = "UPDATE `materias` SET `estado_m`='0' WHERE id = $id_materia";


$resultado  = mysqli_query(conectame(), $query);



$error = mysqli_error(conectame());

if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
    echo "1";
} else {
    echo '0';
}