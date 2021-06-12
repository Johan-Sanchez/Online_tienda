<?php session_start();
 require "../db/db.php";

$user_name = $_SESSION['admin'];
$conexion = Conectar::conexion();

$statement = $conexion->prepare('SELECT * FROM admin_user WHERE user_name = :user_name LIMIT 1');
$statement->execute([':user_name' => $user_name]);
$resultado = $statement->fetchObject();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los datos del usuario por medio del formulario.
    $id = $resultado->id;
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $errores = '';

    if (empty($new_password) or empty($confirm_password)) {
        $statement = $conexion->prepare('UPDATE admin_user SET email = :email, user_name = :user_name, phone = :phone WHERE id = :id');
        $resultado = $statement->execute([
            ':email' => $email,
            ':user_name' => $user_name,
            ':phone' => $phone,
            ':id' => $id
            ]);
        

    } else {

        $new_password = hash('sha512',$new_password);
        $confirm_password = hash('sha512',$confirm_password);

        if($new_password == $resultado->password){
            $errores ='Las contraseñas debe ser diferente de la actual';
        }
        

        if ($new_password != $confirm_password) {
            $errores = 'Las contraseñas no son iguales';
        }
        
        if($errores == ''){
            $statement = $conexion->prepare('UPDATE admin_user SET email = :email, 
                                                                    user_name = :user_name, 
                                                                    phone = :phone,
                                                                    password = :password
                                            WHERE id = :id');

            $resultado = $statement->execute([
            ':email' => $email,
            ':user_name' => $user_name,
            ':phone' => $phone,
            ':password' => $new_password,
            ':id' => $id
            ]);
        }
       
    
        

    }

    $statement = $conexion->prepare('SELECT * FROM admin_user WHERE user_name = :user_name LIMIT 1');
    $statement->execute([':user_name' => $user_name]);
    $resultado = $statement->fetchObject();
    
}


require '../views/admin_profile.view.php';