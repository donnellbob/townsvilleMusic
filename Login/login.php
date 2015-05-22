<?php session_start(); 

error_reporting(E_ALL);
?>

<!doctype html>
<html>
<head>
<title>Login Page</title>
</head>
<body>
<h1>Login Page</h1>
<?php 
// print message from session, if one exists
//if (isset($_SESSION['msg'])) {
//	echo "<p style='color:red'>".$_SESSION['msg']."</p>"; 
//}

// Only display the login form if the user is not logged in
if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="secure.php">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <br>
    <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br>
    <input type="submit" name="submit" value="Login">
</form>

<?php } ?>
<p>Here is the session data in $_SESSION:</p>
<pre>
<?php
// print_r is very useful for debugging - see everything in an array. Use <pre> to see it clearly formatted.
print_r($_SESSION); 
?>
</pre>
<nav><a href="secure.php">Secure Page</a>
    <?php if (isset($_SESSION['username'])) echo '<a href="logout.php">Logout </a>';
echo '<a href="register.php">Register</a>'
?>    
</nav>
</body>
</html>