<?php
require_once ('/xampp/htdocs/notre_site/admin/model/ModelCategory.php');

class controllerCategory{
    public static function getall() {
        $res = ModelCategory::getAllCategory(Model::$pdo);
        require ('../view/main/main.php');
    }

    public static function add(){
        $cat_title = $_POST['cat_title'];
        $add = new ModelCategory($cat_title);
        $add->addCategorie(Model::$pdo);
        session_start();
        require ('../view/main/main.php');
    }

    public static function deleteCategory(){
        $cat_title=$_GET['cat_title'];
        ModelCategory::deleteCategory(Model::$pdo,$cat_title);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

    public static function updateCategory(){
        $cat_id=$_GET['cat_id'];
        $cat_title = $_POST['cat_title'];
        ModelCategory::updateCategory(Model::$pdo,$cat_title,$cat_id);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }
}

?>