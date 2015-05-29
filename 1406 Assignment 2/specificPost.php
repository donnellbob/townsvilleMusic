<?php
include("dbconnect.php")
?>

<!doctype html>

<?php $artistName = $_GET['artistName'];   ?>
<html>
<div class="container">
<head>
<meta charset="utf-8">
<title><?php echo $artistName ?> </title>    
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
   
  <div class="container">
  
<?php    
echo "<h1> $artistName </h1>";

$sql = "SELECT * FROM artists WHERE artists ='$artistName'";
foreach ($dbh->query($sql) as $row){
    print $row[contentLong]."<br />\n";
    print "<h3> Contact Information </h3>";
	print "Phone number :  " .$row[phone]."<br />\n";
    print "Mobile number:  " .$row[mobile]."<br />\n";
    print "Email Address:  " .$row[email]."<br />\n";
}
echo "<img src='image/musos/".$artistName.".jpg'/><br / >";

$dbh = null;
?>
    
   <?php 
   include ("inc_footer.php");
    ?>
   </div>
    
</body>
</html>
