<?php session_start();
    require_once("../models/post_model.php");
    require "../functions.php";

    $post = new PostModel();

    $filter = $_GET['filter'];

    $resultados = $post->get_posts();

    if(isset($filter)){

        if($filter == 'hombre' || $filter == 'mujer' || $filter == 'niña'){
            $resultados = $post->get_by_category($filter);
        }elseif ($filter !== 'all'){
            $resultados = $post->get_by_product_type($filter);
        }else{
            $resultados;
        }
    }
    
    $resultados;

    require '../views/post.view.php';

?>

