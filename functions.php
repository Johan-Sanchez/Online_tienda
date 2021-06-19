<?php

function getFileExtension($file_name)
{
    return substr(strrchr($file_name, '.'), 1);
}

function comprobarSesion()
{
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . ROUTE);
    }
}

function limpiarDatos($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function current_page()
{
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}



