
<?php
include("dbconnect.php")

?>
<!doctype html>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title>Townsville Artists - Artists</title>
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
     include ("inc_nav.php"); ?>       
  
<div class="container">  
<p>
Filter artists by category (Also not working at the moment)
<form method="post" action="categorisedArtist.php">
<select name="category">
    <option value="allArtists">Select......</option>
    <option value="blues">Blues</option>
    <option value="rap">Rap</option>
    <option value="something">Something else</option>
        
</select>
<input type="submit" value ="Filter">    
</form>
</p>
<?php

if($_POST['category'] == 'blues'){
    echo "<h1> List of Blues Artists </h1>";
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row){
    echo '<h1><a href="specificPost.php?artistName=' .$row[artists]. '">'.$row['artists'].'</a></h1>';
    echo $row[contentShort]."<br/><br/>\n";
    echo "<img src='image/musos/".$row['artists'].".jpg'/><br / >";
}
}



// close the database connection
$dbh = null;
?>
  
  

   <?php 
   include ("inc_footer.php");
    ?>
   
</div>
    
</body>
</html>
