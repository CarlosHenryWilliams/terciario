<?php
include('../conexion.php');



$id_materia = $_POST['id'];
$sql = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materia ";
$query = mysqli_query(conectame(), $sql);


// Se crea un array vacio
$Array = [];

// Loop through query and push results into $someArray;
// un while normal y tiramos los datos en el array con el array push
while ($row = mysqli_fetch_assoc($query)) {
        array_push($Array, [
                'nombre'   => $row['nombre'],
                'codigo_correlativa' => $row['codigo_correlativa'],
                'abreviatura' => $row['abreviatura']

        ]);
}

// Convertimos el array a un json string
$variable = json_encode($Array);
echo $variable;