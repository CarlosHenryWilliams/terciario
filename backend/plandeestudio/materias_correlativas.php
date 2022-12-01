<?php
include('../conexion.php');



$id_materia = $_POST['id'];
$sql = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materia ";
$query = mysqli_query(conectame(), $sql);


$data = $query->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);


// foreach ($nisman as $query) {

//     echo json_encode($nisman);
// }

// $row = mysqli_fetch_array($query);

// $opcion = $_POST['opcion'];

// switch ($opcion) {
//     case "cargarcorrelativas":



        // $con = conectame();
        // $query = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materia";
        // $respuesta = $con->query($query) or die($con->error . " error en linea");

//         while ($row2 = $resultado2->fetch_assoc()) {
//             echo '                            
//                             <li><b> Codigo: </b>' . $row2['id'] . ' <b>Nombre: </b> ' . $row2['nombre'] . '</li> <br>';
//         }
//         mysqli_data_seek($resultado2, 0);
//         break;
// }


// CONSULTA PARA VER CORRELATIVAS

// <p class="card-text">'.$item['descripcion'].'</p>\