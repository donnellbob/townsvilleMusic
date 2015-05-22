<?php
session_start();
// Report all PHP errors 
error_reporting(E_ALL);

include("dbconnect.php");
$debugOn = true;


// logged in yes no?
if (!isset($_SESSION['username'])){
	if (isset($_POST['username'])) {
        $STM = $dbh->prepare("SELECT password,id FROM registeredUsers WHERE email = :email");
        $STM->bindParam(':email', $_POST['username']);
        $STM->execute();
        $row = $STM ->fetchColumn(); 
        
        if(md5($_POST['password']) == $row){
            
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['msg'] = "You are Logged in!";
            
			// Generate a new session ID 
			session_regenerate_id();
		}else{
			$_SESSION['msg'] = "Invalid username and/or password!";

			header("Location: login.php");
			exit();
		}
	}else {
		$_SESSION['msg'] = "You must log in first";
		header("Location: login.php");
		exit();
	}
}
?>