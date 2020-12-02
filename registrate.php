<?php 
session_start();

require 'admin/config.php';

if (isset($_SESSION['usuario'])){
    header('Location: index.php');
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $tipo_usuario = $_POST['tipo_usuario'];
    $nombre= $_POST['nombre'];
    $segundo_nombre= $_POST['apellido'];
    $sexo= $_POST['genero'];
    $email= $_POST['correo'];
    $nombre_usuario = filter_var(strtolower($_POST['nick_name']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password_2 = $_POST['password2'];

    $errores = '';

    if(empty($nombre_usuario) or empty($password) or empty($password_2)){

        $errores= '<li>Por favor llene los campos correctamente</li>';
        
    }else{

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=tienda_online', 'root', '');
        }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM user WHERE nick_name = :nick_name LIMIT 1');
        $statement->execute(array(':nick_name' => $nombre_usuario));

        $resultado = $statement->fetch();

        if($resultado != false){
            $errores = '<li>El nombre de usuario ya exite</li>';
        }

        $password = hash('sha512', $password);
        $password_2 = hash('sha512', $password_2);

        if($password != $password_2){
            $errores= '<li>Las contraseñas no son iguales</li>';
        }
    }

        if($errores == ''){

           $statement = $conexion->prepare('INSERT INTO user ( id, order_id, user_type, name, last_name, genre, email, nick_name, password) 
                                            VALUES (null, null, null, :name, :last_name, :genre, :email, :nick_name, :password)');

           $statement->execute(array(
                                    ':name' => $nombre,
                                    ':last_name' => $segundo_nombre,
                                    ':genre' => $sexo,
                                    ':email'=>$email,
                                    ':nick_name' => $nombre_usuario,
                                    ':password'=> $password)); 

           header('Location: login.php');
        }

}

    require 'views/registrate.view.php';
?>
