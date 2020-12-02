<?php
  session_start();

  require "functions.php";
  require "admin/config.php";

  $conexion = conexion($blog_config);

  if (!$conexion) {
    header('Location: error.php');
  }

  if(isset($_SESSION['usuario'])){
      header('Location: contenido.php');
      die();
  }else{
      header('Location: registrate.php');
  }
?>
