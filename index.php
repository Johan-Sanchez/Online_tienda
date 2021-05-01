<?php
  session_start();

  require "db/db.php";
  require "admin/config.php";

  $conexion = Conectar::conexion();

  if (!$conexion) {
    header('Location: error.php');
  }

  // TODO guardar en una variable los posts para el catalogo
  /* $posts = obtener_post($blog_config['post_por_pagina'], $conexion); */
  
  if(!isset($_SESSION['usuario'])){
      header('Location: controllers/user_controller.php');
  }
  require 'views/index.view.php';
?>
