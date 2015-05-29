<?php session_start();
//	This file simply unsets the session variables we're using to authenticate & destroys the session
	$username = $_SESSION['username']; // store so we can use it one more time for goodbye message
	unset($_SESSION['username']);
	unset($_SESSION['msg']);
	session_destroy();
?>

<!doctype html>
<html>
<div class ="container">
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
<div class ="container">
    <p>Goodbye <?php echo $username; ?>.</p>

  
   <?php 
   include ("inc_footer.php");
    ?>
</div>
    
</body>
</html>
