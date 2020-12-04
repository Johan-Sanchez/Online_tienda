<?php session_start();

    require "functions.php";
    require "admin/config.php";
    // Comprobamos si ya tiene una sesion
    # Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }
    // Comprobamos si ya han sido enviado los datos
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email= $_POST['correo'];
        $password = $_POST['password'];

        // Nos conectamos a la base de datos
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=tienda_online', 'root', '');

            $password = hash('sha512', $password);

            $statement = $conexion->prepare('SELECT email, password FROM user WHERE email = :email AND password = :password');

            $statement->execute(array(':email' => $email, ':password' => $password));
            $resultado = $statement->fetch();

            if ($resultado !== false) {

                $_SESSION['usuario'] = $email;
                header('Location: index.php');

            } else {
                
                $errores = '<li>Datos incorrectos</li>';
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    require 'views/login.view.php';

?>

