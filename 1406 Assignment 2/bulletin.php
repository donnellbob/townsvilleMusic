<?php include("dbconnect.php");?>

<!doctype html>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title>Townsville Music - Bulletin</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css">

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
    
<div class="container">
    


  <h2>Notice Board</h2> 
  <a href="formpost.php">Enter Post</a>
  <?php
  	include("posts.php");
	?>
	
	
	
   <?php 
   include ("inc_footer.php");
    ?>
    </div>
    
</body>
</html>
