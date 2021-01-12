<?php
	session_start();
	include("includes/db.php");
	include("funcs/funcs.php");
	include("../controller/payementController.php");
	//include("../database/DB.php");

	//product details
	
	
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	//$run_items = mysqli_query($conn,$get_items);

	//$stmt=DB->connect();
	$run_items=DB::connect()->query("select * from cart where ip_add='$ip'");
	

	
    //while($p_price=mysqli_fetch_array($run_items)){
	while($p_price=$run_items->fetchAll()){
		$total=0;	
		$pro_id = $p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'"; 
		//$run_pro_price = mysqli_query($conn,$pro_price);
		$run_pro_price=DB::connect()->query($pro_price);
		
		//while($pp_price=mysqli_fetch_array($run_pro_price)){
		while($pp_price=$run_pro_price->fetchAll()){
			$pro_price = array($pp_price['price']);
			$pr_id = array($pp_price['product_id']);
			$values = array_sum($pro_price);
					
			$total+=$values;
			}
	
	//product qty
	$get_qty = "select * from cart where p_id='$pro_id'";
	//$run_qty = mysqli_query($conn,$get_qty);
	$run_qty =DB::connect()->query($get_qty);
	//$row_qty = mysqli_fetch_array($run_qty);
	$row_qty =$run_qty->fetchAll();
	$qty = $row_qty['qty'];
	
	//customer details
	$user = $_SESSION['customer_email'];
	$get_c = "select * from customers where customer_email='$user'";
	//$run_c = mysqli_query($conn,$get_c);
	$run_c =DB::connect()->query($get_c);
	//$row_c = mysqli_fetch_array($run_c);
	$row_c=$run_c->fetchAll();
	$c_id = $row_c['customer_id'];
	
	
	
	$insert_payments = "insert into payment (amount,customer_id,product_id,payment_date)values ('$total','$c_id','$pro_id',NOW());";

	//$run_payments = mysqli_query($conn,$insert_payments);
	$run_payments =DB::connect()->query($insert_payments);
	
	$insert_orders = "insert into orders (p_id,c_id,qty) values ('$pro_id','$c_id','$qty');";
	//$run_orders = mysqli_query($conn,$insert_orders);
	//$run_orders =DB->connect()->query($insert_orders);
	
	
	$empty_cart = "delete from cart where ip_add='$ip'";
	//$run_cart = mysqli_query($conn,$empty_cart);
	$run_cart =	DB::connect()->query($empty_cart);
	}
	echo "<script>window.open('index.php','_self')</script>";
?>