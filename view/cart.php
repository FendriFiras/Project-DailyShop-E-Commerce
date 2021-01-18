<?php
include ("includes/head.php");
include("includes/nav.php");
require_once("../database/DB.php");
include("../controller/CartController.php");
include("../controller/ProductsController.php");


?>


 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/cart.jpg" alt="fashion img" height="20%" width="100%">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="" method="post" enctype="multipart/form-data">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
  $total=0;
	
  $ip=getIp();
  $cat=new CartController();
  $cart=$cat->getPanier($ip);
  
 
	foreach($cart as $p_price){
		
		$pro_id = $p_price['p_id'];
    $qty = $p_price['qty'];
    $products=new ProductsController();
    $products=$products->getProductByPanier($pro_id);
    
	
		
			foreach($products as $pp_price){
					$product_price = array($pp_price['price']);
					$product_title = $pp_price['product_title'];
					$product_image = $pp_price['product_img1'];
					$single_price = $pp_price['price'];
					$qty_price = $single_price * $qty;
					$total+=$qty_price;
			
	
	?>
                    
 
                      <tr>
                       <!-- <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>-->
                      	<td><input type="checkbox" class="remove" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                        <td><a href="#"><img src="product_images/<?php echo $product_image; ?>" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#"><?php echo $product_title; ?></a></td>
                        <td><?php echo "$".$single_price; ?></td>
                        <td><input class="aa-cart-quantity" type="number" size="4" value="<?php echo $qty; ?>" name="qty<?php echo $pro_id; ?>"></td>
                        <?php
							if(isset($_POST['update_cart'])){
                $cat=new CartController();
                $cart2=$cat->getPanier2($ip,$pro_id);
								
                      
             
							
								
								foreach($cart2 as $carts){
									
									$pro_id=$carts['p_id'];
                  $new_qty=$_POST['qty'.$pro_id];
                  $cat=new CartController();
                  $cart3=$cat->updatepanier($new_qty,$pro_id);
                 
								
								}
								echo "<script>window.open('cart.php','_self')</script>";
							}
						?>
                        <td><?php echo "$".$qty_price; ?></td>
                      </tr>
                      <?php } } ?>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                        <input style="margin-left:50px" class="aa-cart-view-btn" type="submit" name="update_cart" value="Delete">  
                        <input style="margin-left:50px" class="aa-cart-view-btn" type="submit" name="update_cart" value="Update Cart">  	
                        <input style="margin-left:50px" class="aa-cart-view-btn" type="submit" name="continue" value="Continue Shopping">
						
                        </td>
                      </tr>
                      
                      </tbody>
                  </table>
                
             </form>
             <?php             
             	
			function updatecart(){
			
				$ip=getIp();
				if(isset($_POST['update_cart'])){
					foreach($_POST['remove'] as $remove_id){
            $cat=new CartController();
            $cart3=$cat->supp($remove_id,$ip);
            
          
						
						foreach($cart3 as $row){
							echo "<script>window.open('cart.php','_self')</script>";
						}						
					}
				}
				if(isset($_POST['continue'])){
					echo "<script>window.open('index.php','_self')</script>";
				}
		
			}
			echo @$upcart = updatecart();
             ?>
             </div>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td><?php echo "$ ".$total; ?></td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td><?php echo "$ ".$total; ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="checkout.php" class="aa-cart-view-btn">Proceed to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <?php
include ("includes/footer.php");
?>