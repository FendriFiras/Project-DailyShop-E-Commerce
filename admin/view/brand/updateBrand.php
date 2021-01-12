<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">UPDATE brand</h4>
                        <div class="table-responsive">
                            <form class="form-inline" action="../../admin/controller/router.php?type=brand&action=updateBrand&brand_id=<?php  echo $_GET['brand_id']?>" method="post">
                                <input type="text" class="form-control mb-4 mr-sm-4" id="inlineFormInputName2" value="<?php echo $_GET['brand_title']?>" name="brand_title">
                                <button type="submit" class="btn btn-success mb-4">UPDATE</button>
                            </form>
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