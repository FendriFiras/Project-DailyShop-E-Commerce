<?php
class DB {
    static public function connect(){
        $db= new PDO("mysql:host=localhost;port=3306;dbname=dailyshop","root","");
        $db-> exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;    }
}