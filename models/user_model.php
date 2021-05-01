<?php 
require_once("../db/db.php");

class UserModel{
    private $conexion;
 
    public function __construct(){
        $this->conexion = Conectar::conexion();
    }

    public function validate_user($nombre_usuario){

        $statement = $this -> conexion->prepare('SELECT * FROM user WHERE nick_name = :nick_name LIMIT 1');
        $statement->execute(array(':nick_name' => $nombre_usuario));

        $resultado = $statement->fetch();

        return $resultado;
    }

    public function login_user($password, $email){
        $password = hash('sha512', $password);
        $statement = $this->conexion->prepare('SELECT email, password FROM user WHERE email = :email AND password = :password');

        $statement->execute(array(':email' => $email, ':password' => $password));
        $resultado = $statement->fetch();

        return $resultado;
    
    }

    public function create_user($name, $last_name, $email, $gender, $nick_name, $password){
        $statement = $this->conexion->prepare(
            'INSERT INTO user ( id, user_type, name, last_name, email, genre, nick_name, password) 
             VALUES (null, null, :name, :last_name,  :email,:genre, :nick_name, :password)'
        );

        $statement->execute(array(
                                ':name' => $name,
                                ':last_name' => $last_name,
                                ':email'=>$email,
                                ':genre' => $gender,
                                ':nick_name' => $nick_name,
                                ':password'=> $password)
        ); 

    }
}



?>