<?php 

require_once("../db/db.php");

class PartnerModel{
    private $conexion;
 
    public function __construct(){
        $this->conexion = Conectar::conexion();
    }

    public function get_partners(){
        $statement = $this->conexion->prepare("SELECT * FROM fundaciones");
        $statement->execute();
        $resultados = $statement->fetchAll();
        
        return $resultados;
    }

}
?>