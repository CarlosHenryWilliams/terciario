<?php
include('../conexion.php');

$id_plan_de_estudio = $_POST['id_planestudio'];

$output = array();
$sql = "SELECT * FROM materias WHERE materias.id NOT IN (SELECT planestudio_materia.id_materias FROM planestudio_materia WHERE planestudio_materia.id_plan_estudio = $id_plan_de_estudio )";

// $sql = "SELECT * FROM materias WHERE materias.id NOT IN (SELECT planestudio_materia.id_materias FROM planestudio_materia WHERE planestudio_materia.id_plan_estudio = 7 ) AND  nombre like '%Sistemas%';";
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

    $sql .= "AND `nombre`LIKE '%" . $search_value . "%'";

    //POR EL MOMENTO NO NOS SALE  FILTRAR CON ABREVIATURA

    // $sql .= "OR `abreviatura`LIKE '%" . $search_value . "%'";

    // $sql = "SELECT * FROM materias WHERE materias.id  NOT IN (SELECT planestudio_materia.id_materias FROM planestudio_materia WHERE planestudio_materia.id_plan_estudio = 1 ) AND `nombre` LIKE '%" . $search_value . "%' OR `abreviatura` LIKE '%" . $search_value . "%'";
    // $sql = "SELECT * FROM materias WHERE materias.id NOT IN (SELECT planestudio_materia.id_materias FROM planestudio_materia WHERE planestudio_materia.id_plan_estudio = 1 ) AND `nombre` LIKE '%new%' OR `abreviatura` LIKE'%" . $search_value . "%'";
    // $sql .= "OR `abreviatura`LIKE '%" . $search_value . "%'";

    // $sql .= " AND nombre like '%" . $search_value . "%'";
    // $sql .= "OR abreviatura LIKE '%" . $search_value . "%'";
    // $sql .= " OR estado_m like '%" . $search_value . "%'";

    //NO HABILITAMOS PARA QUE FILTRE POR ESTADO PORQUE EN LA BASE DE DATOS FIGURA 1 o 0 y entonces no iba a funcionar.
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
    $sub_array[] = $row['nombre'];
    $sub_array[] = $row['abreviatura'];
    if ($row['estado_m'] == 1) {
        $sub_array[] = 'Habilitado';
    } else {
        $sub_array[] = 'Deshabilitado';
    }
    $sub_array[] = ' <a href="#" data-id="' . $row['id'] . '"   class="btn btn-primary btnAgregarMateria m-1 rounded"  data-toggle="modal" data-target="#modal_form_asignar_materias"><i class="fa-solid fa-plus"></i> Agregar Materias </a>';
    $data[] = $sub_array;
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_rows,
    'recordsFiltered' =>   $total_all_rows,
    'data' => $data,
);
echo  json_encode($output);