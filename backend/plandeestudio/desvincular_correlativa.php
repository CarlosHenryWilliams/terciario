<?php
include('../conexion.php');

$id_materia = $_POST['id_materia'];


$sql = "DELETE FROM `correlativas` WHERE `id` = $id_materia";

$query = mysqli_query(conectame(), $sql);
if ($query == true) {

    $data = array(
        'status' => 'success',
    );

    echo json_encode($data);
} else {
    $data = array(
        'status' => 'false',
    );

    echo json_encode($data);
}