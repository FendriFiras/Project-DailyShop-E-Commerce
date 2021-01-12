<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Manage Brand</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Brand ID
                                        </th>
                                        <th>
                                            Brand TITLE
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($res as $r) { ?>
                                    <tr>
                                        <td class="py-1 ">
                                        <?php echo $r['brand_id'] ?>
                                        </td>
                                        <td>
                                        <?php echo $r['brand_title'] ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-icon-text">
                                                <i class="ti-trash btn-con-prepend"><a href="../../admin/controller/router.php?type=brand&action=deleteBrand&brand_title=<?php echo $r['brand_title'] ?>" style="color: white;">Delete</a> </i>
                                            </button>

                                            <button type="button" class="btn btn-success btn-icon-text">
                                                <i class="ti-reload btn-con-prepend"><a href="../../admin/controller/router.php?page=brand/updateBrand&brand_title=<?php echo $r['brand_title']?>&brand_id=<?php echo $r['brand_id']?>" style="color: white;"> Update</a></i> 
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