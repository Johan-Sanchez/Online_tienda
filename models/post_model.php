<?php
require_once("../db/db.php");

class PostModel{
    private $conexion;
    private $posts;
 
    public function __construct(){
        $this->conexion = Conectar::conexion();
        $this->posts = array();
    }

    public function get_posts(){
        $statement = $this->conexion->prepare("SELECT * FROM posts");
        $statement->execute();
        $resultados = $statement->fetchAll();
        
        return $resultados;
    }

}

?>