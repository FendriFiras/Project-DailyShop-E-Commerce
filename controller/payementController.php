<?php
include("../models/payement.php");
include("../database/DB.php");

class payementController{
    public function getItems(){
        $items=payement::items();
        return $items;
    }
    public function getProd(){
        $pro=payement::prod();
        return $prod;
    }
    

}