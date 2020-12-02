<?php
function conexion() {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=tienda_online', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;    

    } catch (PDOException $e) { 
        return false;
    }
}
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
