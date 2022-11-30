<?php
// include('modulos/conexion.php');

// $id_materia = $_POST['id'];
// $opcion = $_POST['opcion'];

// switch ($opcion) {
//     case "cargarcorrelativas":


//         $sql2 = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materia";
//         $resultado2 = mysqli_query(conectame(), $sql2);

//         // $con = conectame();
//         // $query = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materia";
//         // $respuesta = $con->query($query) or die($con->error . " error en linea");

//         while ($row2 = $resultado2->fetch_assoc()) {
//             echo '                            
//                             <li><b> Codigo: </b>' . $row2['id'] . ' <b>Nombre: </b> ' . $row2['nombre'] . '</li> <br>';
//         }
//         mysqli_data_seek($resultado2, 0);
//         break;
// }


// CONSULTA PARA VER CORRELATIVAS

// <p class="card-text">'.$item['descripcion'].'</p>\