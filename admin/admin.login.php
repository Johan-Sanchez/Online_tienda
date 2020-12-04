<?php session_start();

    require "../functions.php";
    require "config.php";
    // Comprobamos si ya tiene una sesion
    # Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario

    if (isset($_SESSION['admin'])) {
        header('Location: index.php');
        die();
    }
    // Comprobamos si ya han sido enviado los datos
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user_name = $_POST['username'];
        $password = $_POST['password'];

        // Nos conectamos a la base de datos
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=tienda_online', 'root', '');

            // TODO crear un Superusuario por medio de un registro para que la clave sea encriptada
            /* $password = hash('sha512', $password); */

            $statement = $conexion->prepare('SELECT user_name , password FROM admin_user WHERE user_name= :user_name AND password = :password');

            $statement->execute(array(':user_name' => $user_name, ':password' => $password));
            $resultado = $statement->fetch();

            if ($resultado !== false) {

                $_SESSION['admin'] = $user_name;
                header('Location: index.php');

            } else {
                
                $errores = '<li>Datos incorrectos</li>';
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    require '../views/admin.loginview.php';

?>

