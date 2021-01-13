<?php
class Order{
    static public function palceordre($pro_id,$c_id,$qty){
           

        try{
            $stmt=DB::connect()->prepare('INSERT INTO orders (p_id,c_id,qty) values (:pro_id,:c_id,:qty)');
                $stmt->execute(array(
                    ':pro_id' =>$pro_id,
                    ':c_id' =>$c_id,
                    ':qty' =>$qty));
                
              
               
        
        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
    
}} ?>