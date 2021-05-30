<?php session_start();
    require 'config.php';
    require_once '../models/post_model.php';

    $post = new PostModel();
    $resultados = $post->get_posts();

    require '../views/admin.view.php';
