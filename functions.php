<?php



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
