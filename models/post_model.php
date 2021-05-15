<?php
require_once("../db/db.php");

class PostModel{
    private $conexion;
 
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
            "SELECT a.*, c.phone, c.email AS user_email, c.name, c.last_name  FROM posts a JOIN post_by_user b ON a.id = b.post_id 
                JOIN user c ON c.id = b.user_id WHERE a.id = $id "
        );

        $statement->execute();

        $resultado = $statement->fetchObject();

        return $resultado;
    }

    function create_post($title, $description, $price, $quantity, $product_status,$thumb, $email) {
		$statement = $this->conexion->prepare('INSERT INTO posts (id, title, description, price, quantity, product_status, thumb) 
											 VALUES (null, :title, :description, :price, :quantity, :product_status, :thumb)'
                                             );
        $statement->execute(array(
            'title' => $title,
            'description' => $description,
            'price' => (int) $price,
            'quantity' => (int) $quantity,
            'product_status' => $product_status,
            'thumb' => $thumb
        ));

        // Consulta para capturar la variable de $post_id
        $post_id = $this->conexion->lastInsertId();
        
        // Consulta para capturar la variable de $user_id
        $statement = $this->conexion->prepare('SELECT id FROM user WHERE email = :email');
        $statement->execute(array(
            ':email' => $email
        ));

        $user_id = $statement->fetch(PDO::FETCH_COLUMN);

        // Consulta para insertar los datos en la tabla post_by_user de $post_id
        $statement = $this->conexion->prepare('INSERT INTO post_by_user (user_id, post_id) VALUES (:user_id, :post_id)');
        $registered = $statement->execute(array(
            ':user_id' => (int) $user_id,
            ':post_id' =>  $post_id
        ));
        
        return $registered;

	}

}
?>
