<?php
include("../models/Product.php");
require_once("../database/DB.php");
class ProductsController{
    public function getAllProducts(){
        $products=Product::getAll();
        return $products;
    }
    public function getProductByCategory($id){
        if(isset($id)){
            $data=array(
                'id'=>$id
            );
            $products=Product::getProductByCat($data);
            return $products;
        }
}
public function getProduct(){
    if(isset($_POST["id"])){
        $data=array(
            'id'=>$_POST["id"]
        );
        $products=Product::getProductById($data);
        return $products;
    }
}

public function getProductByPanier($id){
   
        $products=Product::getProductByCart($id);
        return $products;
    
}
}