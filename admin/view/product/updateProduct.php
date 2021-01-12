<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">ADD PRODUCT</h4>
                        <div class="table-responsive">
                            <form class="forms-sample" action="../../admin/controller/router.php?type=product&action=updateProduct&cat_id=<?php  echo $_GET['cat_id']?>" method="post">
                                <div class="form-group">
                                    <label for="exampleInputName1">Product title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $_GET['product_title']?>" name="product_title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Price($)</label>
                                    <input type="number" class="form-control" id="exampleInputEmail3" value="<?php echo $_GET['price']?>" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Product Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"  name="product_desc"><?php echo $_GET['product_desc']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Categorie ID</label>
                                    <select class="form-control" id="exampleSelectGender" name="cat_id">
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
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Brand ID</label>
                                        <select class="form-control" id="exampleSelectGender" name="brand_id">
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
                                        <label for="exampleSelectGender">Product image</label>
                                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $_GET['product_img1']?>" name="product_img1">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-date-input" class="col-form-label">Date</label>
                                            <input class="form-control" type="date" value="<?php echo $_GET['date']?>" id="example-date-input" name="date">
                
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