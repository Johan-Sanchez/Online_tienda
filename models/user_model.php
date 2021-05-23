<?php
require_once '../db/db.php';

class UserModel
{

    private $conexion;


    public function __construct()
    {
        $this->conexion = Conectar::conexion();

    }//end __construct()


    public function validate_user($email)
    {
        $statement = $this->conexion->prepare('SELECT * FROM user WHERE email = :email LIMIT 1');
        $statement->execute([':email' => $email]);

        $resultado = $statement->fetch();

        return $resultado;

    }//end validate_user()


    public function login_user($password, $email)
    {
        $password  = hash('sha512', $password);
        $statement = $this->conexion->prepare('SELECT email, password FROM user WHERE email = :email AND password = :password');

        $statement->execute([':email' => $email, ':password' => $password]);
        $resultado = $statement->fetch();

        return $resultado;

    }//end login_user()


    public function create_user($name, $last_name, $email, $gender, $nick_name, $phone, $password)
    {
        $statement = $this->conexion->prepare(
            'INSERT INTO user ( id, user_type, subscription_id, name, last_name, email, genre, nick_name, phone, password, status) 
             VALUES (null, null, null, :name, :last_name,  :email,:genre, :nick_name, :phone, :password, null)'
        );

        $statement->execute(
            [
                ':name'            => $name,
                ':last_name'       => $last_name,
                ':email'           => $email,
                ':genre'           => $gender,
                ':nick_name'       => $nick_name,
                ':phone'           => $phone,
                ':password'        => $password,
            ]
        );

    }//end create_user()


    public function update_user($email, $subscription_id, $status)
    {
        $statement = $this->conexion->prepare(
            'UPDATE user SET subscription_id = :subscription_id, status = :status
             WHERE email = :email'

        );

        $statement->execute(
            [
                ':email'           => $email,
                ':subscription_id' => $subscription_id,
                ':status'          => $status,
            ]
        );

    }//end update_user()


}//end class
