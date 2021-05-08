<?php 
require_once("../db/db.php");

class ProductModel {
		private $conexion;
	
    function __construct(){
        $this->conexion = Conectar::conexion();
    }

		function create_prod(
														$title, 
														$description, 
														$price,
														$quantity,
														$product_status,
														$thumb
														) {
				$statement = $this->conexion->prepare(
																	'INSERT INTO posts (id, title, description, price, quantity, product_status, thumb) 
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
        $statement = $this->conexion->prepare('SELECT id FROM posts ORDER BY ID DESC LIMIT 1');
        $statement->execute();
        $post_id = $statement->fetch(PDO::FETCH_COLUMN);

        // Consulta para capturar la variable de $user_id
        $statement = $this->conexion->prepare('SELECT id FROM user WHERE email = :email');
        $statement->execute(array(
            ':email' => $email
        ));

        $user_id = $statement->fetch(PDO::FETCH_COLUMN)[0];

        // Consulta para insertar los datos en la tabla post_by_user de $post_id
        $statement = $conexion->prepare('INSERT INTO post_by_user (user_id, post_id) VALUES (:user_id, :post_id)');
        $statement->execute(array(
            ':user_id' => (int) $user_id,
            ':post_id' => (int) $post_id
        ));											
		}
	}
?>
