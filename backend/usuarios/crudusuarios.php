<?php

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');


$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1: //AGREGAR

        $nombre_materia = $_POST['var_nombre_materia'];
        $abreviatura_materia = $_POST['var_abreviatura_materia'];
        $estadohabilitado = $_POST['var_estado_materia'];

        $query = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estadohabilitado')";

        $resultado  = mysqli_query(conectame(), $query);


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

        $id_materia = $_POST['id'];
        $nombre_materia = $_POST['nombre_materia'];
        $abreviatura_materia = $_POST['abreviatura_materia'];
        $estado_materia = $_POST['estado_materia'];

        $query = "UPDATE `materias` SET `nombre`='$nombre_materia',`abreviatura`='$abreviatura_materia',`estado_m`='$estado_materia' WHERE `id`=$id_materia";
        $resultado  = mysqli_query(conectame(), $query);
        $error = mysqli_error(conectame());
        if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
            echo "1";
        } else {
            echo "0";
        }
        break;


    case 3: //CASO 3 DAR DE BAJA

        $id_alumno = $_POST['id'];

        $query1 = "UPDATE `usuarios` SET `estado_u`='0' WHERE `id` =$id_alumno";
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