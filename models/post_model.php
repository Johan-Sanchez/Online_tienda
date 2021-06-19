<?php
require_once("../db/db.php");

class PostModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conectar::conexion();
    }

    // public function get_posts()
    // {
    //     $statement = $this->conexion->prepare("SELECT * FROM posts WHERE status_post = true");
    //     $statement->execute();
    //     $resultados = $statement->fetchAll();

    //     return $resultados;
    // }

    public function get_post_by_id($post_id)
    {
        $statement = $this->conexion->prepare("SELECT * FROM posts WHERE id = :post_id");
        $statement->execute(array(
            ':post_id' => $post_id
        ));
        $resultados = $statement->fetchObject();

        return $resultados;
    }

    public function get_by_product_type($product_type)
    {

        $statement = $this->conexion->prepare("SELECT * FROM posts WHERE product_type = :product_type AND status_post = true");
        $statement->execute(array(
            ':product_type' => $product_type
        ));
        $resultados = $statement->fetchAll();

        return $resultados;
    }

    public function get_by_category($category)
    {

        $statement = $this->conexion->prepare("SELECT * FROM posts WHERE category = :category AND status_post = true");
        $statement->execute(array(
            ':category' => $category
        ));

        $resultados = $statement->fetchAll();

        return $resultados;
    }

    public function get_post_by_user($id)
    {

        $statement = $this->conexion->prepare(
            "SELECT posts.*, user.phone, user.email AS user_email, user.name, user.last_name  FROM posts  JOIN post_by_user  ON posts.id = post_by_user.post_id 
                JOIN user  ON user.id = post_by_user.user_id WHERE posts.id = $id "
        );

        $statement->execute();

        $resultado = $statement->fetchObject();

        return $resultado;
    }

    function create_post($title, $description, $price, $quantity, $category, $product_type, $product_status, $thumb, $email)
    {
        $statement = $this->conexion->prepare(
            'INSERT INTO posts (id, title, description, price, quantity,category,product_type, product_status, thumb) 
											 VALUES (null, :title, :description, :price, :quantity, :category, :product_type, :product_status, :thumb)'
        );
        $statement->execute(array(
            'title' => $title,
            'description' => $description,
            'price' => (int) $price,
            'quantity' => (int) $quantity,
            'category' => (int)$category,
            'product_type' => (int)$product_type,
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

    public function update_post($id, $title, $description, $price, $quantity, $category, $product_type, $product_status)
    {

        $statement = $this->conexion->prepare(
            'UPDATE posts SET title=:title, description=:description, price=:price, quantity=:quantity,
                                            category=:category, product_type=:product_type, product_status=:product_status
                                            WHERE id=:id'
        );
        $result = $statement->execute(array(
            ':id' => (int) $id,
            ':title' => $title,
            ':description' =>  $description,
            ':price' =>  (int) $price,
            ':quantity' =>  (int) $quantity,
            ':category' =>  $category,
            ':product_type' =>  $product_type,
            ':product_status' =>  $product_status
        ));
        return $result;
    }

    public function delete_post($id)
    {
        $statement = $this->conexion->prepare(
            'UPDATE posts SET status_post = 0 WHERE id=:id'
        );
        $result = $statement->execute(array(
            ':id' => (int) $id
        ));
        return $result;
    }

    public function get_posts($post_per_page)
    {
        $inicio = (current_page() > 1) ? (current_page() * $post_per_page - $post_per_page) : 0;
        $sentencia = $this->conexion->prepare(
            "SELECT SQL_CALC_FOUND_ROWS * FROM posts LIMIT {$inicio}, {$post_per_page}"
        );

        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function number_pages($post_per_page)
    {
        $total_post = $this->conexion->prepare('SELECT FOUND_ROWS() FROM posts as total WHERE status_post = true; ');
        $total_post->execute();
        $total_post = $total_post->fetch()['total'];

        $numero_paginas = ceil($total_post / $post_per_page);

        return $numero_paginas;
    }
}
