<?php
require_once '../config/Conf.php';
class Model{
	public static $pdo;
	public static $except;
	public static function Init(){ 
		$host = Conf::getHost();
		$base = Conf::getBase();
		
		$dsn="mysql:host=".$host."; dbname=".$base;
		$user = Conf::getLogin();
		$pass = Conf::getPass();
		try{
			Model::$pdo = new PDO($dsn,$user,$pass); //connexion a la base
			// set the PDO error mode to exception
			Model::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $except){
			echo"Echec de la connexion: ".Model::$except->getMessage();
			die();
		} 
	}
}

Model::Init();// initialisation de la base
?>