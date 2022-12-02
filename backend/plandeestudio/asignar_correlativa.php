<?php
include('../conexion.php');

$id_materia = $_POST['id_materia'];
$id_materia_correlativa = $_POST['id_materia_correlativa'];

$consulta = conectame()->query("INSERT INTO `correlativas`( `codigo_materia`, `codigo_correlativa`) VALUES ('$id_materia','$id_materia_correlativa')");


if ($consulta == true) {

    $data = array(
        'status' => 'true',

    );

    echo json_encode($data);
} else {
    $data = array(
        'status' => 'false',

    );

    echo json_encode($data);
}