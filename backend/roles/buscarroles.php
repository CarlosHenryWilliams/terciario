<?php
include('../conexion.php');
// $query = "SELECT * FROM `materias` WHERE estado_m = 1";

// $resultado = mysqli_query(conectame(), $query);

// if (!$resultado) {
//     die('Query Failed' . mysqli_error(conectame()));
// } else {
//     $array["data"] = []; // declaras un array
//     while ($data = mysqli_fetch_assoc($resultado)) {
//         $array["data"][] = $data;
//     }
//     echo json_encode($array); //el json encode te devuelve el json pero en formato string asi lo puede procesar el frontend
// }
// mysqli_free_result($resultado);
// mysqli_close(conectame());



$output = array();
$sql = "SELECT * FROM roles ";

$totalQuery = mysqli_query(conectame(), $sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'id',
    1 => 'nombre_rol',
    2 => 'estado_r',
);

if (isset($_POST['search']['value'])) {
    $search_value = $_POST['search']['value'];
    $sql .= " WHERE nombre_rol like '%" . $search_value . "%'";
    $sql .= " OR estado_r like '%" . $search_value . "%'";
}

if (isset($_POST['order'])) {
    $column_name = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY " . $columns[$column_name] . " " . $order . "";
} else {
    $sql .= " ORDER BY id desc";
}

if ($_POST['length'] != -1) {
    $start = $_POST['start'];
    $length = $_POST['length'];
    $sql .= " LIMIT  " . $start . ", " . $length;
}

$query = mysqli_query(conectame(), $sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['nombre_rol'];

    if ($row['estado_r'] == 1) {
        $sub_array[] = 'Habilitado';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = 'Deshabilitado';
    }
    // $sub_array[] = $row['estado_m'];
    // $sub_array[] = $row['city'];

    if ($row['estado_r'] == 1) {
        $sub_array[] = '<a href="#" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm btneditar"   data-toggle="modal" data-target="#modal_form_rol" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>  <a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa-solid fa-trash-can"></i></a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-warning btn-sm btndardebaja" style="background-color: #fc8403; color: white;" data-toggle="tooltip" data-placement="bottom" title="Deshabilitar"><i class="fa-solid fa-arrow-down"></i></a>';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = '<a href="#" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_rol" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>  <a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa-solid fa-trash-can"></i></a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-success btn-sm btndardealta" data-toggle="tooltip" data-placement="bottom" title="Habilitar"><i class="fa-solid fa-arrow-up"></i></a>';
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