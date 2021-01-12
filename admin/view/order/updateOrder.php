<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Update Order</h4>
                        <div class="table-responsive">
                            <form class="forms-sample" action="../../admin/controller/router.php?type=order&action=updateOrder&p_id=<?php  echo $_GET['p_id']?>" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Quantite</label>
                                    <input type="number" class="form-control" id="exampleInputEmail3" value="<?php echo $_GET['qty']?>" name="qty">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Categorie ID</label>
                                    <select class="form-control" id="exampleSelectGender" name="c_id">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>

                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Product ID</label>
                                        <select class="form-control" id="exampleSelectGender" name="p_id">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
  

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
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