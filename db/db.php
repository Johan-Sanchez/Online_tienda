<?php 
class Conectar{
    public static function conexion(){
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=tienda_online', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;    
    
        } catch (PDOException $e) { 
            return false;
        }
    }

}
?>