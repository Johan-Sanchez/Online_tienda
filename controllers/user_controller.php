<?php session_start();
    require_once("../models/user_model.php");
    require "../admin/config.php";
    
    // Comprobamos si ya tiene una sesion
    # Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario

    if (isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
        die();
    }
    // Comprobamos si ya han sido enviado los datos
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email= $_POST['correo'];
        $password = $_POST['password'];
        
        
        $user = new UserModel();
        $resultado = $user -> login_user($password,$email);

        if ($resultado !== false) {

            $_SESSION['usuario'] = $email;
            header('Location: ../index.php');

        } else {
            
            $errores = '<li>Datos incorrectos</li>';
        }
    
    }
    
    require '../views/login.view.php';

?>

