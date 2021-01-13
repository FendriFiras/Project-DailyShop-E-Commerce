<?php
include ("includes/head.php");
include("../controller/LoginController.php");
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
					echo "Welcome " . $_SESSION['customer_email'];
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
 
        <?php
        if(isset($_POST['login'])){
          $usr=new LoginController();
          $use=$usr->getAuth();
          $c_email=$_POST['email'];
          $c_pass=$_POST['pass'];
          $check_customer = (DB::connect()->query("select * from customers where customer_email='$c_email' AND customer_pass='$c_pass'"))->rowCount() ;			
          if($check_customer==0){
            echo"<script>alert('Password or Email is incorrect! plz try again')</script>";
          }
          else{		
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('Login Successful !')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          }
                
          if($check_customer>0 ){
            echo "<script>window.open('index.php','_self')</script>";
          }
          else{
            echo "<script>window.open('index.php','_self')</script>";
          }
        }
?>     
<?php
include("includes/footer.php");
?>