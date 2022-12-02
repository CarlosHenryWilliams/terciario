<?php
@include('../conexion.php');


@$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1: //AGREGAR

        $titulo = $_POST['titulo_plan'];
        $nombre = $_POST['nombre_plan'];
        $resolucion = $_POST['resolucion_plan'];
        $estado = $_POST['estado_p_plan'];

        $sql = conectame()->query("INSERT INTO `plan_estudio`( `titulo`, `nombre`, `resolucion`, `estado_p`) VALUES ('$titulo','$nombre','$resolucion','$estado')");

        if ($sql == true) {

            $data = array(
                'status' => 'true',

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

        $id_plan = $_POST['id'];
        $titulo_plan = $_POST['titulo_plan'];
        $nombre_plan = $_POST['nombre_plan'];
        $resolucion_plan = $_POST['resolucion_plan'];
        $estado_plan = $_POST['estado_plan'];

        $sql = conectame()->query("UPDATE `plan_estudio` SET `titulo`='$titulo_plan',`nombre`='$nombre_plan',`resolucion`='$resolucion_plan',`estado_p`='$estado_plan' WHERE `id`=$id_plan");

        if ($sql == true) {

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

        $id_plan = $_POST['id'];

        $sql = conectame()->query("UPDATE `plan_estudio` SET `estado_p`='0' WHERE `id` =$id_plan");

        if ($sql == true) {

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

    case 4:  //CASO 4 DAR DE ALTA

        $id_plan = $_POST['id'];

        $sql = conectame()->query("UPDATE `plan_estudio` SET `estado_p`='1' WHERE `id` =$id_plan");

        if ($sql == true) {

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

        $id_plan = $_POST['id'];
        $sql = conectame()->query("SELECT * FROM plan_estudio WHERE id='$id_plan'");
        $row = mysqli_fetch_assoc($sql);
        echo json_encode($row);
        break;

    case 6: //CASO 6 ELIMINAR MATERIA

        $id_plan = $_POST['id'];
        $sql = conectame()->query("DELETE FROM `plan_estudio` WHERE id='$id_plan'");

        if ($sql == true) {

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
}