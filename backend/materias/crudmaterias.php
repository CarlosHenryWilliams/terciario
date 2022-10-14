<?php
@include('../conexion.php');

/*RECIBE DATOS DE AGREGAR */
// $conexion = mysqli_connect('localhost', 'root', '', 'terciario');


@$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1: //AGREGAR


        $nombre_materia = $_POST['nombre_materia'];
        $abreviatura_materia = $_POST['abreviatura_materia'];
        $estado_m_materia = $_POST['estado_m_materia'];

        $sql = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estado_m_materia')";

        $query = mysqli_query(conectame(), $sql);
        // $lastId = mysqli_insert_id(conectame());
        if ($query == true) {

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



        // $nombre_materia = $_POST['var_nombre_materia'];
        // $abreviatura_materia = $_POST['var_abreviatura_materia'];
        // $estadohabilitado = $_POST['var_estado_materia'];
        // $query = "INSERT INTO `materias`( `nombre`, `abreviatura`, `estado_m`) VALUES ('$nombre_materia','$abreviatura_materia','$estadohabilitado')";
        // $resultado  = mysqli_query(conectame(), $query);
        // $error = mysqli_error(conectame());
        // if ($error == '') {   //O sea si se ejecuto sin errores la consulta.
        //     echo "1";
        // } else {
        //     echo '0';
        // }



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

        $id_materia = $_POST['id'];
        $sql = "UPDATE `materias` SET `estado_m`='0' WHERE `id` =$id_materia";

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

        // $query1 = "UPDATE `materias` SET `estado_m`='0' WHERE `id` =$id_materia";
        // $resultado1  = mysqli_query(conectame(), $query1);

        // $error1 = mysqli_error(conectame());
        // if ($error1 == '') {   //O sea si se ejecuto sin errores la consulta.
        //     echo "1";
        // } else {
        //     echo "0";
        // }



        break;
    case 4: //CASO 3 DAR DE ALTA
        $id_materia = $_POST['id'];
        $sql = "UPDATE `materias` SET `estado_m`='1' WHERE `id` =$id_materia";

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

        break;



    case 5: //CASO 5 OBTENER PRIMERO LOS DATOS CON UNA CONSULTA (INDIVIDUALMENTE)


        // $id_materia = $_POST['id'];
        // $sql = "SELECT * FROM materias  WHERE `id` =$id_materia";

        // $query = mysqli_query(conectame(), $sql);
        // $lastId = mysqli_insert_id(conectame());
        $id_materia = $_POST['id'];
        $sql = "SELECT * FROM materias WHERE id='$id_materia'";
        $query = mysqli_query(conectame(), $sql);
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
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