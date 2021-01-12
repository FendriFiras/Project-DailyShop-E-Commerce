<?php
require_once ('/xampp/htdocs/notre_site/admin/model/Modelbrand.php');

class controllerbrand{
    public static function getall() {
        $res = ModelBrand::getAllbrand(Model::$pdo);
        require ('../view/main/main.php');
    }

    public static function add(){
        $brand_title = $_POST['brand_title'];
        $add = new ModelBrand($brand_title);
        $add->addBrand(Model::$pdo);
        session_start();
        require ('../view/main/main.php');
    }

    public static function deleteBrand(){
        $brand_title=$_GET['brand_title'];
        ModelBrand::deleteBrand(Model::$pdo,$brand_title);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

    public static function updateBrand(){
        $brand_id=$_GET['brand_id'];
        $brand_title = $_POST['brand_title'];
        ModelBrand::updateBrand(Model::$pdo,$brand_title,$brand_id);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }
}

?>