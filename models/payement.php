<?php
class payement{
    static public function payer($total,$c_id,$pro_id){
           

        try{
            $stmt=DB::connect()->prepare('INSERT INTO payment (amount,customer_id,product_id) values ($total,$c_id,$pro_id)');
                $stmt->execute();
                
              
                $stmt=null;
        
        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
    
}} 