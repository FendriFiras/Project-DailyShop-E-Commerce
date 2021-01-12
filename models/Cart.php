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
        
        static public function getCart2($data,$data2){
           
            try{
                $stmt=DB::connect()->prepare('SELECT * FROM cart WHERE ip_add=:id And p_id=:id2');
                    $stmt->execute([
                        ':id' => $data,
                        ':id2' => $data2
                    ]);
                    
                    return $stmt->fetchAll();
   
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

        } ?>
        