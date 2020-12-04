<?php session_start(); 

    require "admin/config.php";
    require "functions.php";

    //comprobarSesion();

    $conexion = conexion();
    if (!$conexion) {
    header('Location: ../error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	      $email = $_SESSION['usuario'];	
        $titulo = $_POST['titulo'];
        $descripcion = limpiarDatos($_POST['descripcion']);
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $condicion = $_POST['condicion'];
        $thumb = $_FILES['thumb']['name'];
        
        /* $archivo_subido = '../imagenes2' . $_FILES['thumb']['nume']; */

        /* move_uploaded_file($thumb, $archivo_subido); */

        $statement = $conexion->prepare(
                                        'INSERT INTO posts (id, title, description, price, quantity, product_status, thumb) 
                                        VALUES (null, :title, :description, :price, :quantity, :product_status, :thumb)'
                                        );
        $statement->execute(array(
            'title' => $titulo,
            'description' => $descripcion,
            'price' => (int) $precio,
            'quantity' => (int) $cantidad,
            'product_status' => $condicion,
            'thumb' => $thumb
        ));

        $statement = $conexion->prepare('SELECT id FROM posts ORDER BY ID DESC LIMIT 1');
        $statement->execute();
        $post_id = $statement->fetch(PDO::FETCH_COLUMN);

        $statement = $conexion->prepare('SELECT id FROM user WHERE email = :email');
        $statement->execute(array(
            ':email' => $email
        ));
        $user_id = $statement->fetch(PDO::FETCH_COLUMN)[0];

        $statement = $conexion->prepare('INSERT INTO post_by_user (user_id, post_id) VALUES (:user_id, :post_id)');
        $statement->execute(array(
            ':user_id' => (int) $user_id,
            ':post_id' => (int) $post_id
        ));
        header('Location: '. ROUTE . 'index.php');
    }
    require 'views/nuevo.view.php';
?>
