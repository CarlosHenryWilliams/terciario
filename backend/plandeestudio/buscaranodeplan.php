<?php
@include('../conexion.php');


@$opcion = $_POST['opcion'];


switch ($opcion) {

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