<?php
include('../conexion.php');
$query = "SELECT * FROM `plan_estudio` WHERE estado_p = '0'";

$resultado = mysqli_query(conectame(), $query);

if (!$resultado) {
    die('Query Failed' . mysqli_error(conectame()));
} else {
    $arreglo["data"] = [];
    while ($data = mysqli_fetch_assoc($resultado)) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}
mysqli_free_result($resultado);
mysqli_close(conectame());