<?php 
    require "admin/config.php";
    require "functions.php";

    $conexion = conexion();

    if(!$conexion){
        header('Location: error.php');
    }

    $statement = $conexion->prepare("SELECT * FROM posts");

    $statement->execute();

    $resultados = $statement->fetchAll();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['eliminar']){

            $id= $_GET['eliminar'];
            $statement = $conexion->prepare("DELETE * FROM posts WHERE id = :id"); 
            $statement->execute(array(':id' =>(int) $id));
        }
    }


    
    require 'views/admin.view.php'

?>