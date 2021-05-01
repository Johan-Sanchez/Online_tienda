<?php 
    require_once("../models/post_model.php");
    require "../functions.php";


    

    $post = new PostModel();
    $resultados = $post->get_posts();


    require '../views/post.view.php';

?>

