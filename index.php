<?php
  session_start();

  require "functions.php";
  require "admin/config.php";

  $conexion = conexion();

  if (!$conexion) {
    header('Location: error.php');
  }

  if(!isset($_SESSION['usuario'])){
      
      header('Location: registrate.php');
  }

  require 'views/index.view.php';
?>
