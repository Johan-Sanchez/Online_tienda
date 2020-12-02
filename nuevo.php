<?php session_start(); 

    require "admin/config.php";
    require "functions.php";

    //comprobarSesion();

    $conexion = conexion();
    if (!$conexion) {
    header('Location: ../error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = limpiarDatos($_POST['nombre']);
        $precio = $_POST['precio'];
        $condicion = $_POST['condicion'];
        $thumb = $_FILES['thumb']['name'];
        
        /* $archivo_subido = '../imagenes2' . $_FILES['thumb']['nume']; */

        /* move_uploaded_file($thumb, $archivo_subido); */

        $statement = $conexion->prepare(
                                        'INSERT INTO products (id, name, price, product_status, thumb) 
                                        VALUES (null, :name, :price, :product_status, :thumb)'
                                        );
        $statement->execute(array(
            'name' => $nombre,
            'price' => (int) $precio,
            'product_status' => $condicion,
            'thumb' => $thumb
        ));

        header('Location: '. ROUTE . 'index.php');
    }
    require 'views/nuevo.view.php';
?>
