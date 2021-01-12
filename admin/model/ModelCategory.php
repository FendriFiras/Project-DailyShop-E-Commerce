<?php

    class ModelCategory{
        private $data=array();

        public function __construct($title)
        {
            $this->data['cat_title']=$title;
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

       public function addCategorie($conn){
           $stmt = $conn->prepare("INSERT INTO category(cat_title) VALUES (:cat_title)");
           $stmt->execute(array(
               ':cat_title' => $this->data['cat_title']
           ));
       }

       public static function getAllCategory($conn){
           $stmt = $conn->query("SELECT * FROM category");
            $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $resultat;
       }

       public static function deleteCategory($conn,$cat_title){
            $stmt = $conn->prepare("DELETE FROM category WHERE cat_title=:cat_title");
            $stmt->execute(array(
                ':cat_title'=> $cat_title
            ));
       }

       public static function updateCategory($conn,$cat_title,$cat_id){
           $stmt = $conn->prepare("UPDATE category SET cat_title=:cat_title where cat_id = :cat_id");
           $stmt->execute(array(
               'cat_title'=> $cat_title,
               'cat_id' => $cat_id
           ));
       }

    }



?>