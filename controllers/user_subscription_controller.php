<?php
session_start();

require '../models/user_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subscription_id = $_POST['subs'];
    $payment_status  = $_POST['payment_status'];
    $email           = $_SESSION['usuario'];

    $subModel = new UserModel();
    $resultados = $subModel->update_user($email, $subscription_id, $payment_status);

    if($resultados == true){
        $_SESSION['subscription_id'] = $subscription_id;
        $_SESSION['subscription_status'] = $payment_status ;
    }

    header('Location: ../controllers/new_post_controller.php');
}


