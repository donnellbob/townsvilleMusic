<!doctype html>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title>Townsville Music - Subscribe</title>
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
     include ("inc_nav.php")  ?>;       
  </header>  
  <div class="container">
    
  <?php
  include ("inc_subscribe.php");
  
  ?>
 
 
   <?php 
   include ("inc_footer.php");
    ?>
   
  </div>
    
</body>
</html>
