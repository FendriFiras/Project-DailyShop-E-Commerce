<?php
class conf {
   
  static private $databases = array(
    'hostname' => 'localhost',
    'database' => 'dailyshop',
    'login' => 'root',
    'password' => ''
  );
   
  static public function getLogin() {
    return conf::$databases['login'];
  }
  static public function getPass() {
    return conf::$databases['password'];
  }
  static public function getHost() {
    return conf::$databases['hostname'];
  }
    static public function getBase() {
    return conf::$databases['database'];
  }
   
}
?>