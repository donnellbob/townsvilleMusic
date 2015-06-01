<?php require("authenticate.php"); 
?>
    
<!doctype html>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title>Townsville Music</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css">

<body>
  <header>
   <img src="image/tcmc02.jpg" width="200" height="200" alt="TCMC logo"/>
    <div class="login">
    <?php 
	include ("inc_headerLogin.php") ?>   
    </div>
</div>      
  <?php
     include ("inc_nav.php");
  ?>
       
  </header>  
  <p><?php echo "Welcome ".$_SESSION['username']; ?> </p>
   <?php 
   include ("inc_footer.php");
    ?>
   
    
</body>
</html>
