<?php
    require_once '../models/post_model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $post_id = $_POST['id'];

    $post = new PostModel();
    $resultado = $post->get_post_by_id($post_id);

    require '../views/editable_product_detail.view.php';
}
