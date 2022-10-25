<?php

$query = "SELECT * FROM roles WHERE estado_r = 1";
$resultado = mysqli_query(conectame(), $query);