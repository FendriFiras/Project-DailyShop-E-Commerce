<?php
if((!isset($_SESSION['page']))&&(isset($_SESSION['username']))){
  header('Location: ../../../../admin/view/login/login.php');
}else{
  include '/xampp/htdocs/notre_site/admin/view/header.php';

?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

<?php include '/xampp/htdocs/notre_site/admin/view/navbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
<?php include '/xampp/htdocs/notre_site/admin/view/sidenav.php';?>
      <!-- partial -->
<?php include '/xampp/htdocs/notre_site/admin/view/'.$_SESSION['page'].'.php'?>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
  <!-- plugins:js -->
  <script src="/notre_site/admin/view/assets/vendors/base/vendor.bundle.base.js"></script>
    <script src="/notre_site/admin/view/assets/js/template.js"></script>
</body>
</html>
<?php } ?>
