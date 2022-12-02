<?php
@include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');


@$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1: //AGREGAR


        $nombre_rol = $_POST['nombre_rol'];
        $estado_r_rol = $_POST['estado_r_rol'];

        $sql = "INSERT INTO `roles`( `nombre_rol`, `estado_r`) VALUES ('$nombre_rol','$estado_r_rol')";

        $query = mysqli_query(conectame(), $sql);

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
        break;



    case 2:  //CASO 2 EDITAR


        $id_rol = $_POST['id'];
        $nombre_rol = $_POST['nombre_rol'];
        $estado_r_rol = $_POST['estado_r_rol'];


        $sql = "UPDATE `roles` SET `nombre_rol`='$nombre_rol',`estado_r`='$estado_r_rol' WHERE `id`=$id_rol";
        $query = mysqli_query(conectame(), $sql);
        // $lastId = mysqli_insert_id($con);
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






        break;


    case 3: //CASO 3 DAR DE BAJA

        $id_rol = $_POST['id'];
        $sql = "UPDATE `roles` SET `estado_r`='0' WHERE `id` =$id_rol";

        $query = mysqli_query(conectame(), $sql);
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



        break;
    case 4: //CASO 4 DAR DE ALTA
        $id_usuario = $_POST['id'];
        $sql = "UPDATE `usuarios` SET `estado_u`='1' WHERE `id` =$id_usuario";

        $query = mysqli_query(conectame(), $sql);
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

        break;



    case 5: //CASO 5 OBTENER PRIMERO LOS DATOS CON UNA CONSULTA (INDIVIDUALMENTE)


        $id_usuario = $_POST['id'];
        $sql = "SELECT * FROM usuarios WHERE id='$id_usuario'";
        $query = mysqli_query(conectame(), $sql);
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
        break;

    case 6: //CASO 6 ELIMINAR MATERIA


        $id_rol = $_POST['id'];
        $sql = "DELETE FROM `roles` WHERE id='$id_rol'";
        $query = mysqli_query(conectame(), $sql);
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
        break;

    case 7: //CASO 7 VER LOS ROLES PA (INDIVIDUALMENTE)


        $id_usuario = $_POST['id'];
        $sql = "SELECT * FROM roles_usuarios WHERE id='$id_usuario'";
        $query = mysqli_query(conectame(), $sql);
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
        break;
}