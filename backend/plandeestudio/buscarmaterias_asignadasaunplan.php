<?php
include('../conexion.php');

$id_plan_de_estudio = $_POST['id_planestudio'];



$output = array();
$sql = "SELECT * FROM materias  INNER JOIN planestudio_materia ON materias.id = planestudio_materia.id_materias INNER JOIN plan_estudio ON plan_estudio.id = planestudio_materia.id_plan_estudio WHERE id_plan_estudio = $id_plan_de_estudio";


$totalQuery = mysqli_query(conectame(), $sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'id',
    1 => 'nombre',
    2 => 'abreviatura',
    3 => 'estado_m',
);


$query = mysqli_query(conectame(), $sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['nombre'];
    $sub_array[] = $row['abreviatura'];
    $sub_array[] = $row['estado_m'];
    $sub_array[] = ' <a href="#" data-id="' . $row['id'] . '"   class="btn btn-primary btnAgregarMateria m-1 rounded"  data-toggle="modal" data-target="#modal_form_asignar_materias"> Agregar Materia <i class="fa-solid fa-plus"></i></a>';
    $data[] = $sub_array;
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_rows,
    'recordsFiltered' =>   $total_all_rows,
    'data' => $data,
);
    

echo  json_encode($output);

