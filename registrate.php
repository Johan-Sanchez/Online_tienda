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
    $segundo_nombre= $_POST['nombre2'];
    $sexo= $_POST['genero'];
    $email= $_POST['correo'];
    $nombre_usuario = $_POST['nick_name'];//filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
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

        $statement = $conexion->prepare('SELECT * FROM users WHERE nick_name = :nombre_usuario LIMIT 1');
        $statement->execute(array(':nombre_usuario' => $nombre_usuario));

        $resultado = $statement->fetch();// fetch() devuelve false si no hay un resultado

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

           $statement = $conexion->prepare('INSERT INTO users ( user_type, nam,last_name, genre, email, nick_name, pass) 
                                            VALUES (:tipo_usuario, :nombre, :segundo_nombre, :sexo, :email, :nombre_usuario, :pass');
           $statement->bindParam(':tipo_usuario' ,$tipo_usuario);
           $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':segundo_nombre',$segundo_nombre);
           $statement->bindParam(':sexo' , $sexo);
           $statement->bindParam(':email',$email);
           $statement->bindParam(':nombre_usuario' , $nombre_usuario);
           $statement->bindParam(':pass', $password);

           $statement->execute();/*(array(
                                    ':tipo_usuario' => $tipo_usuario,
                                    ':nombre' => $nombre,
                                    ':segundo_nombre' => $segundo_nombre,
                                    ':sexo' => $sexo,
                                    ':email'=>$email,
                                    ':nombre_usuario' => $nombre_usuario,
                                    ':pass'=> $password)); */

            //header('Location: login.php');
        }

}

    require 'views/registrate.view.php';
?>
