<?php session_start();
    require 'config.php';
    require '../functions.php';
    require_once '../db/db.php';
  
    $conexion =  Conectar::conexion();
    $statement = $conexion->prepare('SELECT * FROM posts');
    $statement->execute();
    $resultados = $statement->fetchAll();

    require '../views/admin.view.php';
