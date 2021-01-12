<?php
require_once ('/xampp/htdocs/notre_site/admin/model/ModelProduct.php');

class controllerProduct{

    public static function getall(){
       $res= ModelProduct::getall(Model::$pdo);
        require ('../view/main/main.php');
    }

    public function add(){
        $product_title = $_POST['product_title'];
        $price = $_POST['price'];
        $cat_id = $_POST['cat_id'];
        $brand_id = $_POST['brand_id'];
        $product_img1 = $_POST['product_img1'];
        $date = $_POST['date'];
        $product_desc = $_POST['product_desc'];
        $status="on";
        $add = new ModelProduct($cat_id,$brand_id,$date,$product_title,$product_img1,$price,$product_desc,$status);
        $add->addProduct(Model::$pdo);
        session_start();
        require ('../view/main/main.php');
    }

    public static function deleteproduct(){
        $product_title=$_GET['product_title'];
        ModelProduct::deleteProduct(Model::$pdo,$product_title);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

    public static function updateProduct(){
        $cat_id=$_GET['cat_id'];
        $brand_id = $_POST['brand_id'];
        $date = $_POST['date'];
        $product_title= $_POST['product_title'];
        $product_img1 = $_POST['product_img1'];
        $price = $_POST['price'];
        $product_desc = $_POST['product_desc'];
        ModelProduct::updateProduct(Model::$pdo,$cat_id,$brand_id,$date,$product_title,$product_img1,$price,$product_desc);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

}

?>