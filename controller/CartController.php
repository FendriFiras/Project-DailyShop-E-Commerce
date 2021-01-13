<?php
include("../models/Cart.php");
require_once("../database/DB.php");
require_once("../view/funcs/funcs.php");
class CartController{
    public function getPanier($data){
        
            $panier=Cart::getCart($data);
            return $panier;
       
}
public function getPanier2($id1,$id2){
    
   
    
    $panier=Cart::getCart2($id1,$id2);
    return $panier;

}
public function getPanierpayment($data){
        
    $panier=Cart::getCartpayment($data);
    return $panier;

}
public function updatepanier($new,$prod){
        
    
    $panier=Cart::updatecarte($new,$prod);
    return $panier;

}
public function supp($new,$prod){
        
    
    $panier=Cart::supprimer($new,$prod);
    return $panier;

}
public function vider($new){
        
    
    Cart::vidercart($new);
    
}

}




?>