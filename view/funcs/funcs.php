<?php


//displaying main categories	

//getting user IP
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];// recupérer l'@ ip réelle du client
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP']; //on peut trouver l'@ ip dans head HTTP_Client_IP 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // si l'@ ip est derrière un serveur proxy
    }
 
    return $ip;
}

//adding to cart  
function cart(){
	
	if(isset($_GET['add_cart'])){
		
		
		$ip=getIp();
		$pro_id = $_GET['add_cart'];
		$cat=new CartController();
       
			$cat->insertionpanier($pro_id,$ip);
			
			echo "<script>window.open('index.php','_self')</script>";
		
	}
}



//getting total price pf the cart
function total_price(){
	
	$total=0;
	$ip=getIp();
	$cat=new CartController();
	$cart=$cat->getPanier($ip);
	
	foreach($cart as $p_price){
			
		$pro_id = $p_price['p_id'];
		
		$prod=$pro->getProductByPanier($pro_id);
		
		
		
		
		
		foreach($prod as $pp_price){
			$pro_price = array($pp_price['price']);
			
			$values = array_sum($pro_price);
					
			$total+=$values;
			}
	echo "$".$total;
}}



?> 