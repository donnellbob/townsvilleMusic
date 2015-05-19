<?php
//collect error fur debugging during development
error_reporting(E_ALL);
//connect to database script
include("dbconnect.php")
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Bulletin Board</title>
	</head>
	<body>
		<h1>Form Post</h1>  
  		
		
		<fieldset>              
   		 <h2>Enter New Announcement or Event:</h2>
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
  
		<h1>Announcements & Upcoming Events</h1>

<?php


//print_r($_REQUEST);
// select valid posts from the database by valid date
$sql = "SELECT * FROM posttble WHERE post_date < expiry_date OR post_date == expiry_date OR post_date ==''"; 
 
//show selected records on the bulletin page  
foreach ($dbh->query($sql) as $row){
echo "<pre>";
	print $row['post_date'] .' - '. $row['subject'] . ' - '. $row['message'].'<br />';
	
echo "</pre>";
// close the database connection
	
}
$dbh = null;
//echo $sql;

?>
    
</body>  
</html> 
