<?php session_start();

    require_once("../models/post_model.php");
    require "../admin/config.php";

    if (!isset($_SESSION['usuario'])) {
        header('Location: user_controller.php');
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $title = $_POST['titulo'];
        $description = $_POST['descripcion'];
        $price = $_POST['precio'];
        $quantity = $_POST['cantidad'];
        $product_status = $_POST['condicion'];
        $thumb = $_FILES['thumb']['name'];
        $email = $_SESSION['usuario'] ;
        
        $post = new PostModel();
        $result = $post->create_post($title,$description,$price,$quantity,$product_status,$thumb,$email);
    
    }

    require '../views/post_form.view.php';
?>
