<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
$id_plan = $_POST['var_id_plan'];

$query = "UPDATE `plan_estudio` SET `estado_p`='0' WHERE id = $id_plan";


$resultado  = mysqli_query(conectame(), $query);

$error = mysqli_error(conectame());

if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
    echo "1";
} else {
    echo '0';
}