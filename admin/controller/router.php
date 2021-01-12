<?php
require_once '/xampp/htdocs/notre_site/admin/model/Model.php';
require_once 'controllerLogin.php';
require_once 'controllerCategory.php';
require_once 'controllerBrand.php';
require_once 'controllerProduct.php';
require_once 'controllerOrder.php';
require_once 'controllerHome.php';

// $_SESSION['page'] is used to define the selection of output page and 
// with every click on a link a 'page' parametre get throw URL and than redirect
// to routeur page in wish update $_SESSION['page'] to the selected 'page'

//About the view 
//header.php/navbar.php/sidenav.php are fixed in every page and they are included in main.php
// in the main.php the body section is variable and output the 'page' selected by reading $_SESSION['page']

//About parametre passed with the URL
//'type' define the type of controller selected 
//'action' define the methode selected to apply from the selected controller 
if(isset($_GET['page'])){
    session_start();
    unset($_SESSION['page']);
    $_SESSION['page']=$_GET['page'];
}
// checking the type of the request
if((isset($_GET['type']) && (!empty($_GET['type'])))){
    if((isset($_GET['action']) && (!empty($_GET['action'])))){
        $action =$_GET['action'];
        //LOGIN REquest
        if ($_GET['type']=='login'){
            //verification du login on appelant la fonction login
            controllerLogin::$action($_POST['user_email'],$_POST['user_pass']);
        }
        //LOGOUT request
        if ($_GET['type']=='logout'){
            //effasser la variable user name dans la session
            unset ($_SESSION['username']);
            //destruction de la session
            session_destroy();
            header('Location: ../../admin/view/login/login.php');
        }
        //Catergory mangment
        if ($_GET['type']=='category'){
            controllerCategory::$action();
        }
        //Brand managment
        if ($_GET['type']=='brand'){
            controllerbrand::$action();
        }
        //Product managment
        if($_GET['type']=='product'){
            controllerProduct::$action();
        }
        //Order managment
        if($_GET['type']=='order'){
            controllerOrder::$action();
        }

        //Home managment
        if($_GET['type']=='home'){
            controllerHome::$action();
        }
    }
}else{
//checking the session if ther is a user loged in
if(!isset($_SESSION['username'])){
    //if it's not loged in he will be redirected to the login page
    header('Location: ../../../../notre_site/admin/view/login/login.php');
 }
 else{
    //if there is a session already he will allowed to access the amin page
    require '/xampp/htdocs/notre_site/admin/view/main/main.php';
 }
}

?>