
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

<?php

echo "<h1> List of Artists </h1>";
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row){
    echo '<h1><a href="specificPost.php?artistName=' .$row[artists]. '">'.$row['artists'].'</a></h1>';
    echo $row[contentShort]."<br/><br/>\n";
    echo "<img src='image/musos/".$row['artists']." Small.jpg'/><br / >";
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
