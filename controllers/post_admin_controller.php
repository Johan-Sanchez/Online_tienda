<?php
require_once '../models/post_model.php';



$post = new PostModel();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $tipo_prod = $_POST['tipo_prod'];
    $product_status = $_POST['condicion'];

    $accion = $_POST['accion'];
        switch ($accion) {
            case 'guardar':
                $resultado = $post->update_post($post_id, $titulo, $descripcion, $precio, $cantidad, $categoria, $tipo_prod,$product_status);
                header("Location: ../admin/index.php");
                break;
            case 'eliminar':
                $resultado = $post->delete_post($post_id);
                header("Location: ../admin/index.php");
                break;
        }
}