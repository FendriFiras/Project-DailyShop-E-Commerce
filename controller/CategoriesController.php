<?php
include("../models/Category.php");
include("../database/DB.php");
class CategoriesController{
    public function getAllCategories(){
        $categories=Category::getAll();
        return $categories;
    }
}