<?php
include("../models/Order.php");
require_once("../database/DB.php");

class orderController{
    public function metorder($total,$c_id,$pro_id){
        
    
        Order::palceordre($total,$c_id,$pro_id);
        
    }}
