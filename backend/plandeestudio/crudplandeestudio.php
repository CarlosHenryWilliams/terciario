<?php
include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');


$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1: //AGREGAR

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
        break;

    case 2:  //CASO 2 EDITAR
        // $query = "UPDATE `materias` SET `nombre`= '' ,`abreviatura`= '' ,`estado_m`='' 
        //  WHERE `id`= ";

        $id_plan = $_POST['id'];
        $titulo_plan = $_POST['titulo_plan'];
        $nombre_plan = $_POST['nombre_plan'];
        $resolucion_plan = $_POST['resolucion_plan'];
        $estado_plan = $_POST['estado_plan'];


        $query = "UPDATE `plan_estudio` SET `titulo`='$titulo_plan',`nombre`='$nombre_plan',`resolucion`='$resolucion_plan',`estado_p`='$estado_plan' WHERE `id`=$id_plan";

        $resultado  = mysqli_query(conectame(), $query);
        $error = mysqli_error(conectame());
        if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
            echo "1";
        } else {
            echo "0";
        }
        break;


    case 3: //CASO 3 DAR DE BAJA

        $id_plan = $_POST['id'];

        $query1 = "UPDATE `plan_Estudio` SET `estado_p`='0' WHERE `id` =$id_plan";
        $resultado1  = mysqli_query(conectame(), $query1);

        $error1 = mysqli_error(conectame());
        if ($error1 == '') {   //O sea si se ejecuto sin errores la consulta.
            echo "1";
        } else {
            echo "0";
        }

        break;
    case 4:  //LISTAR TABLA

        //EL READ ESTA EN buscarmaterias.php


        break;
}