<?php
include("../models/payement.php");
include("../database/DB.php");

class payementController{
    public function gopayer($total,$c_id,$pro_id){
        
    
        payement::payer($total,$c_id,$pro_id);
        
    }

}