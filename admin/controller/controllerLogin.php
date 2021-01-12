<?php
require_once ('/xampp/htdocs/notre_site/admin/model/ModeLogin.php');

class controllerLogin{
public static function login($user_email,$user_pass){
    //appele a la fonction dans le modele 
    $stmt = ModelLogin::verifLogin(Model::$pdo);
    $stmt->execute(array(
        ':user_email' => $user_email,
        ':user_pass' => $user_pass
    ));
    $row =  $stmt->fetch(PDO::FETCH_ASSOC);
    session_start();
    if ($row == FALSE){
        $_SESSION['error']="your email or password is rong";
        header('Location: ../../admin/view/login/login.php');
    }else{
        //starting new session
        unset($_SESSION['error']);
        $_SESSION['username']=$user_email;
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }
}

}


?>