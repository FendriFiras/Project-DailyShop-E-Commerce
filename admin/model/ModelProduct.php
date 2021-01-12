<?php

    class ModelProduct{
        private $data=array();

        public function __construct($cat_id,$brand_id,$date,$product_title,$product_img1,$price,$product_desc,$status)
        {
            $this->data['cat_id']=$cat_id;
            $this->data['brand_id']=$brand_id;
            $this->data['date']=$date;
            $this->data['product_title']=$product_title;
            $this->data['product_img1']=$product_img1;
            $this->data['price']=$price;
            $this->data['product_desc']=$product_desc;
            $this->data['status']=$status;
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
            $stmt = $conn->query("SELECT * FROM products");
            $res = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $res;
        }
        public function addProduct($conn){
            $stmt = $conn->prepare("INSERT INTO products(cat_id,brand_id,date,product_title,product_img1,price,product_desc,status) VALUES (:cat_id,:brand_id,:date,:product_title,:product_img1,:price,:product_desc,:status)");
            $stmt->execute(array(
                ':cat_id' => $this->data['cat_id'],
                ':brand_id' => $this->data['brand_id'],
                ':date' => $this->data['date'],
                ':product_title' => $this->data['product_title'],
                ':product_img1' => $this->data['product_img1'],
                ':price' => $this->data['price'],
                'product_desc' => $this->data['product_desc'],
                'status' => $this->data['status'],
            ));
        }
        public static function deleteProduct($conn,$product_title){
            $stmt = $conn->prepare("DELETE FROM products WHERE product_title=:product_title");
            $stmt->execute(array(
                ':product_title'=> $product_title
            ));
       }
       public static function updateproduct($conn,$cat_id,$brand_id,$date,$product_title,$product_img1,$price,$product_desc){
        $stmt = $conn->prepare("UPDATE products SET cat_id=:cat_id,brand_id=:brand_id,date=:date,
        product_title=:product_title,product_img1=:product_img1,price=:price,product_desc=:product_desc
        where cat_id = :cat_id");
        $stmt->execute(array(
            ':cat_id'=> $cat_id,
            ':brand_id' => $brand_id,
            ':date' => $date,
            ':product_title' => $product_title,
            ':product_img1' => $product_img1,
            ':price' => $price,
            ':product_desc' => $product_desc
        ));
    }

    }

?>