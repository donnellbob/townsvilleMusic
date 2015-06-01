
<?php
error_reporting('E_All');

session_start();
//connect to database using pdo (php document object)
//catch any error generated upon connecting to the database
	try {
		$dbh = new PDO("sqlite:database/database.sqlite");
		}
		catch (PDOException $e)
		{
		echo $e->getMessage();
		}
?>
