<?php

class Cart{
  
    static public function getCart($data){
     
        try{
            $stmt=DB::connect()->prepare("SELECT * FROM cart WHERE ip_add=:id");
               $stmt->execute(['id'=>$data]);
                $row=$stmt->fetchAll();
                return $row;

                $stmt=null;
        
        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
        }
        
        static public function getCartpayment($data){
     
            try{
                $stmt=DB::connect()->prepare("SELECT * FROM cart WHERE p_id=:id");
                   $stmt->execute(['id'=>$data]);
                    $row=$stmt->fetchAll();
                    return $row;
    
                    $stmt=null;
            
            }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
            }

       
            
            static public function updatecarte($new,$prod){
           

                try{
                    $stmt=DB::connect()->prepare('UPDATE cart set qty=:id where p_id=:id2');
                        $stmt->execute([
                            'id' => $new,
                            'id2' => $prod
                        ]);
                        return $stmt->fetchAll();

                        $stmt=null;
                
                }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
                }

                static public function supprimer($new,$prod){
           

                    try{
                        $stmt=DB::connect()->prepare('DELETE from cart where p_id=:id AND ip_add=:id2');
                            $stmt->execute([
                                'id' => $new,
                                'id2' => $prod
                            ]);
                            return $stmt->fetchAll();

                            $stmt=null;
                    
                    }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
                    }

                    static public function vidercart($new){
           

                        try{
                            $stmt=DB::connect()->prepare('DELETE FROM cart where ip_add=:id ');
                                $stmt->execute((['id'=>$new]));
                                
                              
                                $stmt=null;
                        
                        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
                        }

                        static public function insertionpanier2($pro_id,$ip){
           

                            try{
                                $stmt=DB::connect()->prepare("INSERT INTO cart (p_id,ip_add,qty) VALUES (:pro_id,:ip,1)");
                                    $stmt->execute(array(
                                        ':pro_id' =>$pro_id,
                                        ':ip' =>$ip,
                                        ));
                                  
                                    
                                  
                                    $stmt=null;
                            
                            }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
                        
                    }
        } ?>
        