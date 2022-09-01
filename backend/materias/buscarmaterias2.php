<?php
include('../conexion.php');
$query = "SELECT * FROM `materias`";

$resultado = mysqli_query(conectame(), $query);

if (!$resultado) {
    die('Query Failed' . mysqli_error(conectame()));
} else {
    $array["data"] = [];
    while ($data = mysqli_fetch_assoc($resultado)) {
        $array["data"][] = $data;
    }
    echo json_encode($array);
}
mysqli_free_result($resultado);
mysqli_close(conectame());

// $json = array(); // declaras un array
// while ($row = mysqli_fetch_array($resultado)) {
//     $json[] = array(
//         'id' => $row['id'],
//         'nombre' => $row['nombre'],
//         'abreviatura' => $row['abreviatura'],
//         'estado_m' => $row['estado_m']

//     );
// }
// $jsonstring = json_encode($json);  //el json encode te devuelve el json pero en formato string asi lo puede procesar el frontend
// echo $jsonstring; //devolves los datos