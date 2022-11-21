<?php
include('../conexion.php');

$id_plan = $_POST['id_plan_de_estudio'];
$id_materia = $_POST['id_materia'];
$ano_cursada = $_POST['ano_cursada'];
$periodo_cursada = $_POST['periodo_cursada'];

$consulta = conectame()->query("INSERT INTO `planestudio_materia` (`id_plan_estudio`, `id_materias`, `ano_plan_materia`, `periodo_cursada`) VALUES ('$$id_plan','$id_materia','$ano_cursada','$periodo_cursada')");



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