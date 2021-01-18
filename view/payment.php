<?php
	session_start();
	include("includes/db.php");
	include("funcs/funcs.php");
	include("../controller/payementController.php");
	include("../controller/ProductsController.php");
	include("../controller/CartController.php");
	include("../controller/CustomerController.php");
	include("../controller/orderController.php");

	//product details
	
	$ip=getIp();
	$cat=new CartController();
    $cart=$cat->getPanier($ip);
		
	$pro=new ProductsController();
	$cust=new CustomerController();
	$pay=new payementController();
	$ord=new orderController();
    $total=0;
	foreach($cart as $p_price){
			
		$pro_id = $p_price['p_id'];
		
		$prod=$pro->getProductByPanier($pro_id);
		
		
		
		
		
		foreach($prod as $pp_price){
			$pro_price = array($pp_price['price']);
			
			$values = array_sum($pro_price);
					
			$total+=$values;
			}
	
	
	//product qty
	$cart2=$cat->getPanierpayment($pro_id);
	
		$qty = $cart2[0]['qty'];
		
		}
	//customer details
	if(isset($_SESSION['customer_email'])){
	$user = $_SESSION['customer_email'];
	$customer=$cust->getCustommer($user);
	$c_id = $customer[0]['customer_id'];
	
	

	$pay->gopayer($total,$c_id,null);
	$ord->metorder($pro_id,$c_id,$qty);
	
	
	
	$cat->vider($ip);
	
	
	 }
	echo "<script>window.open('index.php','_self')</script>";
	
?>