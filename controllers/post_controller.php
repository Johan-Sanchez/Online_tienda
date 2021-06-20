<?php session_start();
    require_once("../models/post_model.php");
    require_once('../functions.php');

    $post = new PostModel();

    $filter = $_GET['filter'];
    
    $post_per_page = 5;
    $current_page = (current_page() > 1) ? (current_page() * $post_per_page - $post_per_page) : 0;
    $resultados = $post->get_posts($post_per_page, $current_page);

    if(isset($filter)){

        if($filter == 'hombre' || $filter == 'mujer' || $filter == 'niña'){
            $resultados = $post->get_by_category($filter);
        }elseif ($filter !== 'all'){
            $resultados = $post->get_by_product_type($filter);
        }else{
            $resultados;
        }
    }
    $number_pages = $post->number_pages($post_per_page);

    echo current_page() === $number_pages;
    $resultados;

    require '../views/post.view.php';
