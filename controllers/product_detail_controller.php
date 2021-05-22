<?php session_start();
require_once("../models/post_model.php");

if (!isset($_SESSION['usuario'])) {
    header('Location: user_controller.php');
    die();
}else{

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $product_id = $_POST['id'];
    
        $post = new PostModel();
        $resultado = $post->get_post_by_user($product_id);
        // echo var_dump($resultado);
        require '../views/product_detail.view.php';
    }
}
?>