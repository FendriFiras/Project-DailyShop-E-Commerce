<?php

    class ModelOrder{
        private $data=array();

        public function __construct($p_id,$c_id,$qty)
        {
            $this->data['p_id']=$p_id;
            $this->data['c_id']=$c_id;
            $this->data['qty']=$qty;

        }
        public function __get($attr){
            if(!isset($this->data[$attr])){
               return "erreur";
            } 
           else{
               return ($this->data[$attr]);
           }
       }
       public function __set($attr,$value){ 
           $this->data[$attr]=$value;
       }

        public static function getall($conn){
            $stmt = $conn->query("SELECT * FROM orders");
            $res = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $res;
        }
        public function addOrder($conn){
            $stmt = $conn->prepare("INSERT INTO orders(p_id,c_id,qty) VALUES (:p_id,:c_id,:qty)");
            $stmt->execute(array(
                ':p_id' => $this->data['p_id'],
                ':c_id' => $this->data['c_id'],
                ':qty' => $this->data['qty'],
            ));
        }
        public static function deleteOrder($conn,$order_id){
            $stmt = $conn->prepare("DELETE FROM orders WHERE order_id=:order_id");
            $stmt->execute(array(
                ':order_id'=> $order_id
            ));
       }
       public static function updateOrder($conn,$p_id,$c_id,$qty){
        $stmt = $conn->prepare("UPDATE orders SET p_id=:p_id,c_id=:c_id,qty=:qty where p_id = :p_id");
        $stmt->execute(array(
            ':p_id'=> $p_id,
            ':c_id' => $c_id,
            ':qty' => $qty
        ));
    }

    }

?>