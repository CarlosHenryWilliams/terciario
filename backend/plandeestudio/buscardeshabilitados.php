<?php
include('../conexion.php');


$estado = $_POST['var_estado'];

$query2 = "SELECT * FROM `plan_estudio` WHERE estado_p = $estado";

$resultado2 = mysqli_query(conectame(), $query2);

if (!$resultado2) {
    die('Query Failed' . mysqli_error(conectame()));
} else {
    $arreglo2["data"] = [];
    while ($data2 = mysqli_fetch_assoc($resultado2)) {
        $arreglo2["data"][] = $data2;
    }
    echo json_encode($arreglo2);
}
mysqli_free_result($resultado2);
mysqli_close(conectame());