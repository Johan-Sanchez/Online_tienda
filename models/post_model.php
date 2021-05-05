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

    public function get_post_by_user($id){
        
        $statement = $this -> conexion->prepare(
            "SELECT a.*, c.email AS user_email FROM posts a JOIN post_by_user b ON a.id = b.post_id 
                JOIN user c ON c.id = b.user_id WHERE a.id = $id "
        );

        $statement->execute();

        $resultado = $statement->fetchObject();

        return $resultado;

    }

    

}

?>