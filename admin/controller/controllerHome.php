<?php
require_once ('/xampp/htdocs/notre_site/admin/model/ModelHome.php');

    class controllerHome{

        public static function getall(){
            $data = ModelHome::getall(Model::$pdo);
            require ('../view/main/main.php');
        }
    }

?>