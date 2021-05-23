<?php
  session_start();

  require 'db/db.php';
  require 'admin/config.php';

  $conexion = Conectar::conexion();

if ($conexion === false) {
    header('Location: error.php');
}

  require 'views/index.view.php';
