<?php


$nombre_materia = $_POST['nombre_materia'];
$abreviatura_materia = $_POST['abreviatura_materia'];
$estado_m_materia = $_POST['estado_m_materia'];

// $sql = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estado_m_materia')";

$sql = "INSERT INTO `usuarios`( `nombre`, `apellido`, `sexo`, `dni`, `fecha_nacimiento`, `lugar_nacimiento`, `estado_civil`, `domicilio`, `domicilio_numero`, `piso`, `depto`, `localidad`, `partido`, `codigo_postal`, `telefono`, `telefono_alternativo`, `telefono_alternativo_persona`, `email`, `clave`, `estado_u`) VALUES ('','','','','','','','','','','','','','','','','','','','')";

$query = mysqli_query(conectame(), $sql);
// $lastId = mysqli_insert_id(conectame());
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