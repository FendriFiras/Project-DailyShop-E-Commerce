<?php
include("../models/registery.php");
include("../database/DB.php");

class RegisterController{
    public function getRegister($c_ip,$c_fname,$c_lname,$c_email,$c_pass,$c_country,$c_city,$c_contact,$c_address){
       registery::getUser($c_ip,$c_fname,$c_lname,$c_email,$c_pass,$c_country,$c_city,$c_contact,$c_address);
        
    }
}
?>