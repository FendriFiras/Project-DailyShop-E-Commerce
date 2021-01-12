<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">DailySHOP Dashboard</h4>
          </div>
          <div>
            <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
              <i class="ti-clipboard btn-icon-prepend"></i>Report
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Category</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo ($data['category']) ?></h3>
              <i class="ti-direction-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
            <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Brand</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo ($data['brand']) ?></h3>
              <i class="ti-medall-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
            <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Products</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo ($data['products']) ?></h3>
              <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
            <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Orders</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo ($data['orders']) ?></h3>
              <i class="ti-shopping-cart-full icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
            <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body" >
            <p class="card-title" style="color:red">Registred Costumers</p>
            <div class="row">
              <table class="table  table-striped">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Contact</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $res=$data['customers'];
                foreach ($res as $r) { ?>
                  <tr>
                    <td class="py-1"><?php echo $r['customer_fname']?></td>
                    <td><?php echo $r['customer_lname']?></td>
                    <td><?php echo $r['customer_email']?></td>
                    <td><?php echo $r['customer_city']?></td>
                    <td><?php echo $r['customer_contact']?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <?php include '/xampp/htdocs/notre_site/admin/view/footer.php'; ?>
  <!-- partial -->
</div>