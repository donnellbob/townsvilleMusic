<?php
//collect error fur debugging during development
error_reporting(E_ALL);
//connect to database script
include("dbconnect.php");
?>


<!doctype html>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title>Townsville Bulletin</title>
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
    
<div class="container">
    

	<body>
<?php

if (isset($_SESSION['username'])){

?>
		<h1>Form Post</h1>  
  		
		
		<fieldset>              
   		 <h2>Enter Event:</h2>
		 <form id="insert" name="insert"  method="post" action="dbprocessposts.php">
   		 <p>
		  <label for="subject">Subject: </label>
      	<input type="text" name="subject" id="subject" placeholder="Title" required />
    	</p>
   		 <p>
      	<label for="expiry_date">Expiry Date: </label>
     	 <input type="date" name="expiry_date" id="expiry_date" placeholder="2015-01-31" pattern="\d{4}-\d{1,2}-\d{1,2}" />
   		 </p>
		 <p>
      	<label for="message">Message: </label>
      	<input type="textarea" name="message" id="message" placeholder="Enter message" required />
   		 </p>
   		 <p>
     	 <input type="submit" name="submit" id="submit" value="Submit Event">
   		 </p>
		 
		</fieldset>    
    
		</form>
	
<?php }else{
       echo "<h1 text-align=center> Sorry you must log in first to make new posts! </h1>"; 
        
}?>	
	
   <?php 
   include ("inc_footer.php");
    ?>
    </div>
    
</body>
</html>
