<?php 
    require "admin/config.php";
    require "functions.php";

    $conexion = conexion();

    if(!$conexion){
        header('Location: error.php');
    }

    $statement = $conexion->prepare("SELECT * FROM fundaciones");
    $statement->execute();
    $resultados = $statement->fetchAll();


    
    require 'views/fundaciones.view.php';

?>