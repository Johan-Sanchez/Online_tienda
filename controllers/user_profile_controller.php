<?php session_start();

require_once "../models/user_model.php";

$email = $_SESSION['usuario'];

$user = new UserModel();
$resultado = $user->get_user($email);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los datos del usuario por medio del formulario.
    $id = $resultado->id;
    $email = $_POST['email'];
    $nick_name = $_POST['nick_name'];
    $phone = $_POST['phone'];
    $status = $_POST['subscription-status'];

    if ($status === 'inactivo') {
        $status= NULL;
        $subscription_id = NULL;
        $resultado = $user->update_user_profile($id, $email, $nick_name, $phone,$status,$subscription_id );
        $_SESSION['subscription_id'] = NULL;
        $_SESSION['subscription_status'] = NULL;
    } else {
        $status = $resultado->status;
        $subscription_id = $resultado->subscription_id;
        $resultado = $user->update_user_profile($id, $email, $nick_name, $phone, $status, $subscription_id);
    }
    
    $resultado = $user->get_user($email);
}


require '../views/user_profile_view.php';