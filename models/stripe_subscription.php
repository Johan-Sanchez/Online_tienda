<?php 
require_once("../db/db.php");

class StripeSubscription {
    private $conexion;
 
    public function __construct(){
        $this->conexion = Conectar::conexion();
    }

    public function insert_id($subscription_id) {
        $statement = $this->conexion->prepare(
            'INSERT INTO subscription_t (sub_id, user_sub_id) 
             VALUES (null, :subscription_id)'
        );

        $statement->execute(array(
                                ':user_sub_id' => $subscription_id
                                )
  
        );
        return true;
    }
}

?>