<?php
require_once ('/xampp/htdocs/notre_site/admin/model/ModelOrder.php');

class controllerOrder{

    public static function getall(){
       $res= ModelOrder::getall(Model::$pdo);
        require ('../view/main/main.php');
    }

    public function add(){
        $p_id= $_POST['p_id'];
        $c_id = $_POST['c_id'];
        $qty = $_POST['qty'];

        $add = new ModelOrder($p_id,$c_id,$qty);
        $add->addOrder(Model::$pdo);
        session_start();
        require ('../view/main/main.php');
    }

    public static function deleteOrder(){
        $order_id=$_GET['order_id'];
        ModelOrder::deleteOrder(Model::$pdo,$order_id);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

    public static function updateOrder(){
        $p_id=$_GET['p_id'];
        $c_id = $_POST['c_id'];
        $qty = $_POST['qty'];
        ModelOrder::updateOrder(Model::$pdo,$p_id,$c_id,$qty);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }

}

?>