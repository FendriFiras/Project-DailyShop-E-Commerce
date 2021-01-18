<?php

//displaying main categories	
function getCatsMainNav(){
	
	$stmt=DB::connect()->prepare('SELECT * FROM category');
	$stmt->execute();
	$row=$stmt->fetchAll();
              	
				foreach($row as $row_cats){
					
					$cat_id = $row_cats['cat_id'];
					$cat_title = $row_cats['cat_title'];
					
					echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
				}
	
}

//getting user IP
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//adding to cart  
function cart(){
	
	if(isset($_GET['add_cart'])){
		
		
		$ip=getIp();
		$pro_id = $_GET['add_cart'];
		$stmt1=DB::connect()->prepare("SELECT * FROM cart WHERE ip_add='$ip' And p_id='$pro_id'");
		$stmt1->execute();
		
		$row1=$stmt1->fetchAll();
		$num_rows=count($row1);
		if($num_rows>0){
			echo "";	
		}
		else{
			$stmt2=DB::connect()->prepare("INSERT INTO cart (p_id,ip_add,qty) VALUES ('$pro_id','$ip',1)");
		    $stmt2->execute();
		
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
}

//getting total items in the cart
function total_items(){
	
	$ip=getIp();
	$stmt3=DB::connect()->prepare("SELECT * FROM cart WHERE ip_add='$ip'");
	$stmt3->execute();
	$row3=$stmt3->fetchAll();
	$count_items=count($row3);
	
	echo $count_items;
}

//getting total price pf the cart
function total_price(){
	
	$total=0;
	$ip=getIp();
	$stmt4=DB::connect()->prepare("SELECT * FROM cart WHERE ip_add='$ip'");
	$stmt4->execute();
	$row4=$stmt4->fetchAll();
	
	
	foreach($row4 as $p_price){
		
		$pro_id = $p_price['p_id'];

		$stmt5=DB::connect()->prepare("SELECT * FROM products WHERE product_id='$pro_id'");
	     $stmt5->execute();
	     $row5=$stmt5->fetchAll();
		
			foreach($row5 as $pp_price){
					$pro_price = array($pp_price['price']);
					$values = array_sum($pro_price);
					
					$total+=$values;
			}
	}
	echo "$".$total;
}



?>