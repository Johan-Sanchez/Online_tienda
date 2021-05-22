<?php session_start();

    session_destroy();

    $_SESSION = array();

    header('Location: controllers/user_controller.php');
    
    die();
?>