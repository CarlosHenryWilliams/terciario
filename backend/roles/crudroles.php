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
        $id_rol = $_POST['id'];
        $sql = "UPDATE `roles` SET `estado_r`='1' WHERE `id` =$id_rol";

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


        $id_rol = $_POST['id'];
        $sql = "SELECT * FROM roles WHERE id='$id_rol'";
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
}





function mostrar_alumnos_actividad()
{ //ID actividad

    $sql = "SELECT * FROM `materias` WHERE estado_m = 1";
    @$query = mysqli_query(conectame(), $sql);
    if (@mysqli_num_rows($query) > 0) {
        echo "
       
        <div class='table-responsive'>
        <table id='nisman' class='table  nowrap' cellspacing='0' width='100%'>

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
            ";
        while ($vec = mysqli_fetch_row($query)) {
            echo "<tr>
          <td>$vec[1]</td>
          <td>$vec[2]</td>
          <td>$vec[0]</td>
          <td>
            <a href='ctacte.php?id=$vec[3]'><button class='btn btn-primary my-1'>Pagos</button></a>  <a href='carnet.php?id=$vec[3]'><button class='btn btn-primary my-1'>Carnet</button></a>  <button id='btn-borra' type='button' class='btn btn-danger my-1 btn-borra' data-nombre='" . $vec[2] . ", " . $vec[1] . "' data-id='" . $vec[3] . "' >Borrar</button>
          </td>
        </tr>";
        }

        echo " </tbody>
                </table>
                </div>
                    
            ";
    } else {
        echo "<h4>No hay alumnos cargados en esta actividad<h4>";
    }
}