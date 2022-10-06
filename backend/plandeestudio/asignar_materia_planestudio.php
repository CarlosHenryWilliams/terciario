<?php 
include('./modulos/conexion.php');

$id_plan = $_POST[''];
$id_materia = $_POST[''];


$consulta = conectame()->query('INSERT INTO `planestudio_materia`(`id`, `id_plan_estudio`, `id_materias`) VALUES ('[value-1]','[value-2]','[value-3]')');