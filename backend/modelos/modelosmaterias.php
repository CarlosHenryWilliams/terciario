<?php
include('../conexion.php');

function get_materias()
{

    $query = "SELECT * FROM `materias`";

    $conexion = conectame();
    return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
}

// function get_categoria_id($id)
// {

//     $query = "SELECT * FROM `categorias` WHERE categorias.id=$id";

//     $conexion = conectame();
//     return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
// }

// function get_categoria_nombre($nombre)
// {

//     $query = "SELECT * FROM `categorias` WHERE categorias.nombre=$nombre";

//     $conexion = conectame();
//     return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
// }



// /**
//  * INSERTA UNA CATEGORIA 
//  */

// function insert_categoria()
// {
//     $nombre_categoria = $_POST['nombre_categoria'];
//     $query = conectame()->query("INSERT INTO categorias(nombre)VALUES ('$nombre_categoria )");
// }

// /**
//  * ELIMINA UNA CATEGORIA 
//  */

function delete_categoria($id)
{
    $query = conectame()->query("DELETE categorias FROM categorias WHERE id=$id");
}

/**
 * EDITA UNA CATEGORIA 
 */

function edit_categoria($id)
{
    $nombre_categoria = $_POST['nombre_categoria'];
    $query = conectame()->query("UPDATE `categorias` SET `nombre`='$nombre_categoria' WHERE id = $id");
}