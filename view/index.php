<?php
//include("../controller/CartController.php");
include("includes/head.php"); 
include("includes/nav.php");
include("../controller/ProductsController.php");
?>
<?php



if (isset($_GET['cat'])) {
  $products = new ProductsController();
  $products = $products->getProductByCategory($_GET['cat']);
} else {
  $data = new ProductsController();
  $products = $data->getAllProducts();
}
?>



  

  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <ul class="seq-canvas">
          <!-- single slide item -->
          <li>
            <div class="seq-model"> <img data-seq src="img/slider/slider-1.jpg" alt="Men slide img" /> </div>
            <div class="seq-title"> <span data-seq>Save Up to 75% Off</span>
              <h2 data-seq>Best Collection</h2>
              <p data-seq>Shop at the lowest prices.</p>
              <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
            </div>
          </li>

        </ul>
        <!-- slider navigation btn -->
        <!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
-->
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Start men product category -->
                  <div class="tab-pane fade in active" id="men">


                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <?php
                      foreach ($products as $product) :
                      ?>
                        <?php
                        $pro_id = $product['product_id'];
                        $pro_title = $product['product_title'];
                        $pro_cat = $product['cat_id'];
                        $pro_brand = $product['brand_id'];
                        $pro_desc = $product['product_desc'];
                        $pro_price = $product['price'];
                        $pro_img1 = $product['product_img1'];
                        echo "
                      <li>
					         <figure> 
					  	<a class='aa-product-img href='#'>
							<img src='product_images/$pro_img1' alt='$pro_img1' width='250' height='300' >
						</a> 
						<a class='aa-add-card-btn' href='index.php?add_cart=$pro_id'>
							<span class='fa fa-shopping-cart'></span>Add To Cart
						</a>
                        <figcaption>
                          <h4 class='aa-product-title'><a href='#'>$pro_title</a></h4>
                          <span class='aa-product-price'>$ $pro_price</span>
						  
						</figcaption>
                      </figure>
                      
					  <div class='aa-product-hvr-content'> 
					  	<a href='#' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
					  		<span class='fa fa-heart-o'></span>
					  	</a> 
					  	<a href='#' data-toggle='tooltip' data-placement='top' title='Compare'>
							<span class='fa fa-exchange'></span>
						</a> 
						<a href='modal.php?Id=$pro_id' data-toggle2='tooltip' data-placement='top' title='Quick View' data-toggle='modal'
						 data-target='#quick-view-modal'>
							<span class='fa fa-search'></span>
						</a> 
					</div>
                      <!-- product badge --> 
                      <span class='aa-badge aa-sale' href='#'>SALE!</span> </li>
                   "; ?>

                      <?php endforeach; ?>

                    </ul>
                    <a class="aa-browse-btn" href="index.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>

                  <!-- / men product category -->
                </div>
              </div>

              
<!-- quick view modal -->
<div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!------------------->
                    <!------------------->
                    <!-- From modal.php-->
                    <!------------------->
                    <!------------------->
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING IN SFAX</h4>

              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->

              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/firas.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Firas Fendri</p>
                    <span>WEB DEVELLOPER</span> <a href="#">ENIS</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/emna.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Emna Belhaj</p>
                    <span>WEB DEVELLOPER</span> <a href="#">ENIS</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/zeinab.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Zeinab Ben abdalah</p>
                    <span>WEB DEVELLOPER</span> <a href="#">ENIS</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/eya.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>

                  <div class="aa-testimonial-info">
                    <p>Eya Ketata</p>
                    <span>WEB DEVELLOPER</span> <a href="#">ENIS</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->



  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

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
