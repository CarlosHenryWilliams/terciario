<?php
include('../conexion.php');
$query = "SELECT * FROM `materias`";

$resultado = mysqli_query(conectame(), $query);

if (!$resultado) {
    die('Query Failed' . mysqli_error(conectame()));
} else {
    $array["data"] = []; // declaras un array
    while ($data = mysqli_fetch_assoc($resultado)) {
        $array["data"][] = $data;
    }
    echo json_encode($array); //el json encode te devuelve el json pero en formato string asi lo puede procesar el frontend
}
mysqli_free_result($resultado);
mysqli_close(conectame());