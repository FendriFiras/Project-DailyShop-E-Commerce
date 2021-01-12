<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Manage Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" >
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Product ID</th>
                                        <th>Category ID</th>
                                        <th>Quantite</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($res as $r) { ?>
                                    <tr>
                                        <td ><?php echo $r['order_id'] ?></td>
                                        <td><?php echo $r['p_id'] ?></td>
                                        <td><?php echo $r['c_id'] ?></td>
                                        <td><?php echo $r['qty'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-icon-text">
                                                <i class="ti-trash btn-con-prepend"><a href="../../admin/controller/router.php?type=order&action=deleteOrder&order_id=<?php echo $r['order_id'] ?>" style="color: white;">Delete</a> </i>
                                            </button>

                                            <button type="button" class="btn btn-success btn-icon-text">
                                                <i class="ti-reload btn-con-prepend"><a href="../../admin/controller/router.php?page=order/updateOrder&p_id=<?php echo $r['p_id']?>&qty=<?php echo $r['qty']?>" style="color: white;"> Update</a></i> 
                                            </button>
                                        </td>
                                       
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