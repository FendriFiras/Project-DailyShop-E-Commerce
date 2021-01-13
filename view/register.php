<?php
include("includes/head.php");
include("../controller/RegisterController.php");
?>

<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area"> 
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse"> 
          <!-- Left nav -->
          
          <?php getIp(); ?>
          <?php cart(); ?>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            
			<?php getCatsMainNav(); ?>
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Welcome " .substr($_SESSION['customer_email'], 0, 5) ;
				}
				else{
					echo "Welcome Guest";
				}
				
			?></a>
            </li>
            
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/registration.jpg" alt="fashion img" height="20%" width="100%">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Registration Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

<!-- Register section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
       <form action="" method="post">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Fill form to Register
                          </a>
                        </h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="f_name" placeholder="First Name*">                              
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="l_name" placeholder="Last Name*">
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="email" placeholder="Email Address*">
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              	<input type="password" name="pass" placeholder="Password*">
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                          	<div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <input type="tel" name="contact"  placeholder="Phone*">
                             </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select <select name="country">>
                                  <option value="0">Select Your Country</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Afganistan">Afganistan</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="Canada">Canada</option>
                                  <option value="China">China</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="India">India</option>
                                  <option value="Iran">Iran</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="UAE">UAE</option>
                                  <option value="UK">UK</option>
                                  <option value="USA">USA</option>
                                </select>
                              </div>                             
                            </div>                           
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="city" placeholder="City / Town*">
                              </div>                             
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="address" cols="20" rows="4" placeholder="Address*" ></textarea>
                              </div>                             
                            </div>
                          </div>   
                                <button name="register" class="aa-browse-btn">Register</button>
                                
                                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Register section -->
<?php
include("includes/footer.php");
?>
<?php

	if(isset($_POST['register'])){
	
        $c_ip = getIp();
        $regist = new RegisterController();
        
		$c_fname = $_POST['f_name'];
		$c_lname = $_POST['l_name'];
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$c_contact = $_POST['contact'];
		$c_country = $_POST['country'];
		$c_city = $_POST['city'];
    $c_address = $_POST['address'];
    
    $regist->getRegister($c_ip,$c_fname,$c_lname,$c_email,$c_pass,$c_country,$c_city,$c_contact,$c_address);
 
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart =DB::connect()->query($sel_cart);
		
		//$check_cart = $sel_cart->rowcount();
		
		$_SESSION['customer_email']=$c_email;
		//if($check_cart==0){
			echo "<script>alert('Registration Successful !');</script>";
			echo "<script>window.open('index.php','_self')</script>";	
    //}
    //else{
    	//echo "<script>window.open('checkout.php','_self')</script>";	    	
    //}
	}

?>