<?php
class payement{
    static public function items(){
        $ip=getIp();
	    $get_items = "select * from cart where ip_add='$ip'";
	    $run_items = DB::connect()->query($get_items);
    }
    static public function prod(){
        $pro_price="select * from products where product_id='$pro_id'"; 
        $run_pro_price =DB::connect()->query($pro_price);
    }
    
}