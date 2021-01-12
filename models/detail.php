<?php
class detail{
	static public function showDetail(){
		$prod_Id = $_GET['Id'];
		$get_products = "select * from products p join category c on (p.cat_id=c.cat_id) where product_id='$prod_Id'";
        $run_products=DB::connect()->query($get_products);
		$run_products->execute();
		return $run_products->fetchAll();
		$stmt->close();
		$stmt=null;
	} 
}
?>