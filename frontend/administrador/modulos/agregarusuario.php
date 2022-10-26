<?php
include('conexion.php');

// EL ROL EN LA 2DA CONSULTA JUNTO CON EL DNI, PERO EL DNI TAMBIEN ESTA EN LA PRIMER CONSULTA
$rol_usuario = $_POST['rol_usuario'];

$nombre_usuario = $_POST['nombre_usuario'];  //
$apellido_usuario = $_POST['apellido_usuario']; //
$sexo_usuario = $_POST['sexo_usuario']; //
$dni_usuario = $_POST['dni_usuario']; //
$fecha_nacimiento_usuario = $_POST['fecha_nacimiento_usuario']; //
$lugar_nacimiento_usuario = $_POST['lugar_nacimiento_usuario']; //
$estado_civil_usuario = $_POST['estado_civil_usuario']; //
$domicilio_usuario = $_POST['domicilio_usuario']; //
$domicilio_numero_usuario = $_POST['domicilio_numero_usuario']; //
$piso_usuario = $_POST['piso_usuario']; //
$depto_usuario = $_POST['depto_usuario']; //
$localidad_usuario = $_POST['localidad_usuario']; //
$partido_usuario = $_POST['partido_usuario']; //
$codigo_postal_usuario = $_POST['codigo_postal_usuario']; //
$telefono_usuario = $_POST['telefono_usuario']; //
$telefono_alternativo_usuario = $_POST['telefono_alternativo_usuario']; //
$telefono_alternativo_persona_usuario = $_POST['telefono_alternativo_persona_usuario']; //
$correo_usuario = $_POST['correo_usuario']; //
$fecha_inscripcion_usuario = $_POST['fecha_inscripcion_usuario']; //
$clave_usuario = $_POST['clave_usuario'];
$estado_usuario = $_POST['estado_usuario'];


$sql = "INSERT INTO `usuarios`( `nombre`, `apellido`, `sexo`, `dni`, `fecha_nacimiento`, `lugar_nacimiento`, `estado_civil`, `domicilio`, `domicilio_numero`, `piso`, `depto`, `localidad`, `partido`, `codigo_postal`, `telefono`, `telefono_alternativo`, `telefono_alternativo_persona`, `email`, `fecha_inscripcion`, `clave`, `estado_u`) VALUES ('$nombre_usuario','$apellido_usuario','$sexo_usuario','$dni_usuario','$fecha_nacimiento_usuario','$lugar_nacimiento_usuario','$estado_civil_usuario','$domicilio_usuario ','$domicilio_numero_usuario','$piso_usuario','$depto_usuario','$localidad_usuario ','$partido_usuario','$codigo_postal_usuario ','$telefono_usuario','$telefono_alternativo_usuario ','$telefono_alternativo_persona_usuario','$correo_usuario','$fecha_inscripcion_usuario ','$clave_usuario','$estado_usuario')";

$query = mysqli_query(conectame(), $sql);

if ($query == true) {


    $sql2 = "INSERT INTO `roles_usuarios`( `usuarios_dni`, `rol_id`) VALUES ('$dni_usuario','$rol_usuario')";
    $query2 = mysqli_query(conectame(), $sql2);

    if ($query2 == true) {
        $data = array(
            'status' => 'success',

        );
        echo json_encode($data);
    }
} else {
    $data = array(
        'status' => 'false',

    );

    echo json_encode($data);
}