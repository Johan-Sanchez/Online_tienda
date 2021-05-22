<?php session_start();
    require "config.php";
    require "../functions.php";

    $conexion = conexion();

    if(!$conexion){
        header('Location: error.php');
    }

    $statement = $conexion->prepare("SELECT * FROM posts");
    $statement->execute();
    $resultados = $statement->fetchAll();

    require '../views/admin.view.php';
?>