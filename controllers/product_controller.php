<?php 
    require_once("../models/product_model.php");
    require "../admin/config.php";

    if (isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $title = $_POST['titulo'];
				$description = $_POST['descripcion'];
				$price = $_POST['precio'];
				$quantity = $_POST['cantidad'];
				$product_status = $_POST['condicion'];
				$thumb = $_POST['thumb'];
        
        
        $product = new ProductModel();
        $result = $product->create_prod($title,$description,$price,$quantity,$product_status,$thumb);

        if ($resultado !== false) {

            $_SESSION['usuario'] = $email;
            header('Location: ../index.php');

        } else {
            
            $errores = '<li>Datos incorrectos</li>';
        }
    
    }
    require '../views/product.view.php';
?>
