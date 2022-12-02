<?php
include('../conexion.php');

$id_planestudio = $_POST['id_planestudio'];
$id_materia = $_POST['id_materia'];
$sql = "DELETE FROM `planestudio_materia` WHERE planestudio_materia.id_materias = $id_materia  AND planestudio_materia.id_plan_estudio = $id_planestudio;";
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