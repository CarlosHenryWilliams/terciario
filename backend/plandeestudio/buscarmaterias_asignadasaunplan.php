<?php
include('../conexion.php');
$id_plan_de_estudio = $_POST['id'];




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

if (isset($_POST['search']['value'])) {

    $search_value = $_POST['search']['value'];
    // $sql = "SELECT * FROM `materias`";

    $sql .= " AND nombre like '%" . $search_value . "%'";
    $sql .= " OR abreviatura like '%" . $search_value . "%'";
    $sql .= " OR estado_m like '%" . $search_value . "%'";
}

if (isset($_POST['order'])) {
    $column_name = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY " . $columns[$column_name] . " " . $order . "";
} else {
    $sql .= " ORDER BY materias.id desc";
}

// if ($_POST['length'] != -1) {
//     $start = $_POST['start'];
//     $length = $_POST['length'];
//     $sql .= " LIMIT  " . $start . ", " . $length;
// }

$query = mysqli_query(conectame(), $sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['nombre'];
    $sub_array[] = $row['abreviatura'];
    if ($row['estado_m'] == 1) {
        $sub_array[] = 'Habilitado';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = 'Deshabilitado';
    }
    // $sub_array[] = $row['estado_m'];
    // $sub_array[] = $row['city'];

    if ($row['estado_m'] == 1) {
        $sub_array[] = ' <a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" >Desvincular</a> ';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = '<a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" >Desvincular</a>';
    }

    $data[] = $sub_array;
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_rows,
    'recordsFiltered' =>   $total_all_rows,
    'data' => $data,
);
echo  json_encode($output);