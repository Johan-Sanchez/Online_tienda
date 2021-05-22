<?php

function getFileExtension($file_name) {
<<<<<<< HEAD
    return substr(strrchr($file_name,'.'),1);
   }
=======
 return substr(strrchr($file_name,'.'),1);
}
>>>>>>> d3e62a5438e8402f51b5527a34016b0f9daea30e

function comprobarSesion() {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . ROUTE);
    }
}

function limpiarDatos($datos) {
    $datos = trim($datos); 
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

?>
