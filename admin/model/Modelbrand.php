<?php

    class ModelBrand{
        private $data=array();

        public function __construct($title)
        {
            $this->data['brand_title']=$title;
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

       public function addBrand($conn){
           $stmt = $conn->prepare("INSERT INTO brands(brand_title) VALUES (:brand_title)");
           $stmt->execute(array(
               ':brand_title' => $this->data['brand_title']
           ));
       }

       public static function getAllbrand($conn){
           $stmt = $conn->query("SELECT * FROM brands");
            $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $resultat;
       }

       public static function deleteBrand($conn,$brand_title){
            $stmt = $conn->prepare("DELETE FROM brands WHERE brand_title=:brand_title");
            $stmt->execute(array(
                ':brand_title'=> $brand_title
            ));
       }

       public static function updatebrand($conn,$brand_title,$brand_id){
           $stmt = $conn->prepare("UPDATE brands SET brand_title=:brand_title where brand_id = :brand_id");
           $stmt->execute(array(
               'brand_title'=> $brand_title,
               'brand_id' => $brand_id
           ));
       }

    }



?>