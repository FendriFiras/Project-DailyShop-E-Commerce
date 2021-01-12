<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Manage Products</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" >
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Category ID</th>
                                        <th>Brand ID</th>
                                        <th>Date</th>
                                        <th>Product Title</th>
                                        <th>product Image</th>
                                        <th>Price</th>
                                        
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($res as $r) { ?>
                                    <tr>
                                        <td ><?php echo $r['product_id'] ?></td>
                                        <td><?php echo $r['cat_id'] ?></td>
                                        <td><?php echo $r['brand_id'] ?></td>
                                        <td><?php echo $r['date'] ?></td>
                                        <td><?php echo $r['product_title'] ?></td>
                                        <td class="py-1 "> <img src="../../view/product_images/<?php echo $r['product_img1'] ?>"></td>
                                        
                                        <td><?php echo $r['price'] ?></td>
                                       
                                        <td><?php echo $r['status'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-icon-text">
                                                <i class="ti-trash btn-con-prepend"><a href="../../admin/controller/router.php?type=product&action=deleteProduct&product_title=<?php echo $r['product_title'] ?>" style="color: white;">Delete</a> </i>
                                            </button>

                                            <button type="button" class="btn btn-success btn-icon-text">
                                                <i class="ti-reload btn-con-prepend"><a href="../../admin/controller/router.php?page=product/updateProduct&product_title=<?php echo $r['product_title']?>&product_id=<?php echo $r['product_id']?>&price=<?php echo $r['price']?>&date=<?php echo $r['date']?>&product_img1=<?php echo $r['product_img1']?>&product_desc=<?php echo $r['product_desc']?>&cat_id=<?php  echo $r['cat_id']?>" style="color: white;"> Update</a></i> 
                                            </button>
                                        </td>
                                        <td ><?php echo $r['product_desc'] ?></td>
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