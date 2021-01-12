<?php
class Product{
    static public function getAll(){
        $stmt=DB::connect()->prepare('SELECT * from products order by rand() LIMIT 0,15');
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt=null;
    }
static public function getProductByCat($data){
$id=$data['id'];
try{
    $stmt=DB::connect()->prepare('SELECT * FROM products WHERE cat_id=:id');
        $stmt->execute(array(":id" =>$id));
        return $stmt->fetchAll();

        $stmt=null;

}catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
}

static public function getProductById($data){
    $id=$data['id'];
    try{
        $stmt=DB::connect()->prepare('SELECT * FROM products WHERE product_id=:id');
            $stmt->execute(array(":id" =>$id));
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result->row;
 
            $stmt=null;
    
    }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
    }
    
    static public function getProductByCart($data){
      
        try{
            $stmt=DB::connect()->prepare('SELECT * FROM products WHERE product_id=:id');
            $stmt->execute(['id'=>$data]);
                
           $res= $stmt->fetchAll();
           return $res;

            $stmt=null;
        
        }catch(PDOException $ex){ echo "erreur".$ex->getMessage();}
        }
        
}
