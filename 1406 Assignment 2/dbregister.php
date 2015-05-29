<?php
include("dbconnect.php");
$debugOn = true;
?>

<!doctype html>
<html>
<div class = "container">
<head>
<meta charset="utf-8">
<title>Townsville Mucic Centre - Home</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css">

</head>

<body>
  <header>
   <img src="image/tcmc02.jpg" width="200" height="200" alt="Diggers logo"/>
    <div class="login">
    <?php 
	include ("inc_headerLogin.php") ?>   
    </div>
</div>      
  <?php
     include ("inc_nav.php");
  ?>
       
  </header>  
  <div class = "container">
    <?php
    if(empty($_REQUEST[email]) || empty($_REQUEST[password])|| empty($_REQUEST[firstName]) || empty($_REQUEST[surname]) ){
    echo "<p><a href='subscribe.php'>It appears a required field was missing</a></p>";

}else{
    
    $encryptPass = md5($_REQUEST[password]);                   
    $sql = "INSERT INTO registeredUsers (email, password, firstName, surname, postalAddress, phoneDay, phoneNight, mobile) VALUES ('$_REQUEST[email]', '$encryptPass', '$_REQUEST[firstName]', '$_REQUEST[surname]', '$_REQUEST[postalAddress]', '$_REQUEST[phoneDay]', '$_REQUEST[phoneNight]', '$_REQUEST[mobile]')";
    if($dbh->exec($sql)){
        echo "Account has been made for,  $_REQUEST[email]";
    }else{
            echo "Something has gone wrong, account not made";
    }
}
    



echo "</strong></p>\n";

$dbh = null;
?>
    
   <?php 
   include ("inc_footer.php");
    ?>
    </div>
    
</body>
</html>
