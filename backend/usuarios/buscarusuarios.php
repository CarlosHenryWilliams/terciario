<?php
include('../conexion.php');
$output = array();
$sql = "SELECT * FROM usuarios ";

$totalQuery = mysqli_query(conectame(), $sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'id',
    1 => 'nombre',
    2 => 'apellido',
    3 => 'sexo',
    4 => 'dni',
    5 => 'fecha_nacimiento',
    6 => 'lugar_nacimiento',
    7 => 'estado_civil',
    8 => 'domicilio',
    9 => 'domicilio_numero',
    10 => 'piso',
    11 => 'depto',
    12 => 'localidad',
    13 => 'partido',
    14 => 'codigo_postal',
    15 => 'telefono',
    16 => 'telefono_alternativo',
    17 => 'telefono_alternativo_persona',
    18 => 'email',
    19 => 'clave',
    20 => 'fecha_inscripcion',
    21 => 'estado_u',

);

if (isset($_POST['search']['value'])) {
    $search_value = $_POST['search']['value'];
    $sql .= " WHERE nombre like '%" . $search_value . "%'";
    $sql .= " OR apellido like '%" . $search_value . "%'";
    $sql .= " OR sexo like '%" . $search_value . "%'";
    $sql .= " OR dni like '%" . $search_value . "%'";
    $sql .= " OR fecha_nacimiento like '%" . $search_value . "%'";
    $sql .= " OR lugar_nacimiento like '%" . $search_value . "%'";
    $sql .= " OR estado_civil like '%" . $search_value . "%'";
    $sql .= " OR domicilio like '%" . $search_value . "%'";
    $sql .= " OR domicilio_numero like '%" . $search_value . "%'";
    $sql .= " OR depto like '%" . $search_value . "%'";
    $sql .= " OR localidad like '%" . $search_value . "%'";
    $sql .= " OR partido like '%" . $search_value . "%'";
    $sql .= " OR codigo_postal like '%" . $search_value . "%'";
    $sql .= " OR telefono like '%" . $search_value . "%'";
    $sql .= " OR telefono_alternativo like '%" . $search_value . "%'";
    $sql .= " OR telefono_alternativo_persona like '%" . $search_value . "%'";
    $sql .= " OR email like '%" . $search_value . "%'";
    $sql .= " OR fecha_inscripcion like '%" . $search_value . "%'";
    $sql .= " OR estado_u like '%" . $search_value . "%'";
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
    $sub_array[] = $row['apellido'];
    $sub_array[] = $row['sexo'];
    $sub_array[] = $row['dni'];
    $sub_array[] = $row['fecha_nacimiento'];
    $sub_array[] = $row['lugar_nacimiento'];
    $sub_array[] = $row['estado_civil'];
    $sub_array[] = $row['domicilio'];
    $sub_array[] = $row['domicilio_numero'];
    $sub_array[] = $row['piso'];
    $sub_array[] = $row['depto'];
    $sub_array[] = $row['localidad'];
    $sub_array[] = $row['partido'];
    $sub_array[] = $row['codigo_postal'];
    $sub_array[] = $row['telefono'];
    $sub_array[] = $row['telefono_alternativo'];
    $sub_array[] = $row['telefono_alternativo_persona'];
    $sub_array[] = $row['email'];
    $sub_array[] = $row['clave'];
    $sub_array[] = $row['fecha_inscripcion'];
    // $sub_array[] = $row['estado_u'];


    if ($row['estado_u'] == 1) {
        $sub_array[] = 'Habilitado';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = 'Deshabilitado';
    }
    // $sub_array[] = $row['estado_m'];
    // $sub_array[] = $row['city'];

    if ($row['estado_u'] == 1) {
        $sub_array[] = '<a href="#" data-id="' . $row['id'] . '"  class="btn btn-primary btn-sm btnroles"   data-toggle="modal" data-target="#modal_ver_roles">Ver Roles</a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm btneditar"   data-toggle="modal" data-target="#modal_form_rol">Editar</a>  <a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" >Eliminar</a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-warning btn-sm btndardebaja" >Dar de Baja</a>';
        // $sub_array[] = 'Habilitado' .
        // 	'<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editbtn" > Baja</a>';
    } else {
        $sub_array[] = '<a href="#" data-id="' . $row['id'] . '"  class="btn btn-primary btn-sm btnroles"   data-toggle="modal" data-target="#modal_ver_roles">Ver Roles</a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_rol" >Editar</a>  <a href="#" data-id="' . $row['id'] . '"  class="btn btn-danger btn-sm btneliminar" >Eliminar</a> <a href="#" data-id="' . $row['id'] . '"  class="btn btn-success btn-sm btndardealta" >Dar de Alta</a>';
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