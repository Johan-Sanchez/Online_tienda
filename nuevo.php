<?php session_start(); 

    require "admin/config.php";
    require "functions.php";

    //comprobarSesion();

    $conexion = conexion();
    if (!$conexion) {
    header('Location: ../error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];   //limpiarDatos($_POST['descripcion']);
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $condicion = $_POST['condicion'];
        $thumb = $_FILES['thumb']['name'];
        
        /* $archivo_subido = '../imagenes2' . $_FILES['thumb']['nume']; */

        /* move_uploaded_file($thumb, $archivo_subido); */

        $statement = $conexion->prepare(
                                        'INSERT INTO posts (id, title, description, price, quantity,product_status, thumb) 
                                        VALUES (null, :title,:description, :price, :quantity, :product_status, :thumb)'
                                        );
        $statement->execute(array(
            'title' => $titulo,
            'description' => $descripcion,
            'price' => (int) $precio,
            'quantity' => (int) $cantidad,
            'product_status' => $condicion,
            'thumb' => $thumb
        ));

        header('Location: '. ROUTE . 'index.php');
    }
    require 'views/nuevo.view.php';
?>
