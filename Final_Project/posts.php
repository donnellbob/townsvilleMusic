<?php
//collect error fur debugging during development
error_reporting(E_ALL);
//connect to database script
include("dbconnect.php")
?>
  
	<?php


//print_r($_REQUEST);
// select valid posts from the database by valid date
$sql = "SELECT * FROM posttble WHERE post_date < expiry_date OR post_date == expiry_date OR post_date == '0000-00-00'"; 
 
//show selected records on the bulletin page  
foreach ($dbh->query($sql) as $row){
echo "<pre>";
	print "<h2>" . $row['post_date'] .' - '. $row['subject'] . ':</h2></br>  '. $row['message'].'<br />';
	
echo "</pre>";
// close the database connection
	
}
$dbh = null;
//echo $sql;

?>
    
</body>  
</html> 
