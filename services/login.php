<?php 
	include_once ('../conspath.php');
	include_once(AS_PATH . '/classes/dbAdmin.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	// $redirect = $_POST['redirect'];
	//$login = new userLogin();
	$login = dbAdmin::getInstancia()->doLogin($username, $password);
	if($login){
		session_start(); 
        $_SESSION['nombre'] = $login[0]['username'];
        $_SESSION['userid'] = $login[0]['id'];
        $_SESSION['role'] = $login[0]['role'];
        $_SESSION['name'] = $login[0]['name'];
        $_SESSION['fullname'] = $login[0]['name']. " " .$login[0]['lastname'];
        $_SESSION['email'] = $login[0]['email'];

        echo '<script> window.location = "/dashboard.php" </script>';
       // print_r($login);
	}else{
         // echo '<script> window.location = "./user-login.php?f=fail" </script>';
    }
?>