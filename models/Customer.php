<?php

class Customer{
  
    static public function getCustomer($data){
     
        try{
            $stmt=DB::connect()->prepare(" SELECT * FROM customers where customer_email=:id");
               $stmt->execute(['id'=>$data]);
                $row=$stmt->fetchAll();
                return $row;

                $stmt=null;
        
        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
        }}
        ?>