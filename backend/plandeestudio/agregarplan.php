<?php
// include ('../conexion.php');

$titulo = $_POST['var_titulo'];
$nombre = $_POST['var_nombre'];
$resolucion = $_POST['var_resolucion'];
$estado = $_POST['var_estado'];

$resultado = conectame()->query("INSERT INTO `plan_estudio`( `titulo`, `nombre`, `resolucion`, `estado_p`) VALUES ('$titulo','$nombre','$resolucion','$estado')");

$error = mysqli_error(conectame());

if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
    echo "1";
} else {
    echo '0';
}

?>