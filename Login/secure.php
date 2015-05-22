<?php require("authenticate.php"); 
?>

<!doctype html>
<html>
<head>
<title>Login Success!</title>
</head>

<body>
<h1>Logged in page</h1>
<?php 
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
}
?>
<p><?php echo "Welcome ".$_SESSION['username']; ?> </p>
    
<!--//page requires authenticate.php to load    -->
<p>This content is secret. You can only see it if you are logged in...</p>
<h2>Variables:</h2>
<pre>
<strong>Post:</strong>
<?php
print_r($_GET);
echo "<strong>GET:</strong><br>";
print_r($_POST);
	echo "<strong>Session:</strong><br/>";
	print_r($_SESSION);
	echo "<strong>Session ID: </strong>" . session_id();
	echo "\n<strong>Visits:</strong> $_SESSION[count]\n";
?>
</pre>
<nav>
<a href="login.php">Login</a> <a href="secure.php">Reload</a><a href="logout.php">Logout</a>
</nav>
</body>
</html>
