<?php
include("../models/detail.php");
include("../database/DB.php");

class detailController{
    public function getDetail(){
        $detai=detail::showDetail();
        return $detai;
    }
}
?>