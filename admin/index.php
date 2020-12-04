<?php
  session_start();
  
  require "../functions.php";
  require "config.php";

  $conexion = conexion();

  if (!$conexion) {
    header('Location: error.php');
  }

  // TODO guardar en una variable los posts para el catalogo
  /* $posts = obtener_post($blog_config['post_por_pagina'], $conexion); */
  
  if(!isset($_SESSION['admin'])){
      header('Location: admin.login.php');
  }else{
    header('Location: admin.php');
  }

  require '../views/admin.view.php';
?>
