<?php
    session_start();
    require_once '../models/user_model.php';
    require '../admin/config.php';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name       = $_POST['nombre'];
    $last_name  = $_POST['apellido'];
    $gender     = $_POST['genero'];
    $email      = $_POST['correo'];
    $nick_name  = filter_var(strtolower($_POST['nick_name']), FILTER_SANITIZE_STRING);
    $phone  = $_POST['phone'];
    $password   = $_POST['password'];
    $password_2 = $_POST['password2'];


    $errores = '';

    if (empty($nick_name) or empty($password) or empty($password_2)) {
        $errores = '<li>Por favor llene los campos correctamente</li>';
    } else {
        $user      = new UserModel();
        $resultado = $user->validate_user($email);

        if ($resultado != false) {
            $errores = '<li>El usuario ya exite</li>';
        }

        $password   = hash('sha512', $password);
        $password_2 = hash('sha512', $password_2);

        if ($password != $password_2) {
            $errores = '<li>Las contraseñas no son iguales</li>';
        }
    }

    if ($errores == '') {
        $user->create_user($name, $last_name, $email, $gender, $nick_name, $phone, $password);

        header('Location: ../index.php');
    }
}//end if

require '../views/registrate.view.php';
