<?php
//include database connecting script
include ("dbconnect.php");
$debugOn = true;
?>

<! doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Bulletin Board</title>
</head>

<body>
<h1>Results</h1>

<?php
echo "<h2>Form Data</h2>";
//echo "<pre>";
//print_r($_REQUEST);
//echo "</pre>";


if ($_REQUEST['submit'] == "Submit Event"){

	$sql = "INSERT INTO posttble (subject, expiry_date, message) VALUES ('$_REQUEST[subject]', '$_REQUEST[expiry_date]','$_REQUEST[message]')";
	
	//echo "<p>Query: ". $sql . "</p>\n<p><strong>";
	
	if ($dbh->exec($sql)) {
		echo "Inserted $_REQUEST[subject]";
		}
		
	else
		echo "Event not submitted successfully"; 
	
	}
	else
	echo "This page did not come from a valid form submission.<br />\n";		
		
$dbh = null;
?>

<p><a href="bulletin.php">Return to Bulletin Board Page</a></p>
</body>
</html>




 
