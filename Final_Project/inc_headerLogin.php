<?php session_start(); 

error_reporting(E_ALL);
?>

<header id ="pageHeader">
<aside id="login">
<?php        
if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="secure.php">
<label for="username">Username:</label>
<input type="text" name="username" id="username" placeholder="Username">
<br>
<label for="password">Password:</label>
<input type="password" name="password" id="password" placeholder="******">
<br>
<input type="submit" name="submit" value="Login">
</form>

</aside>
    <div class ="container">
    <?php }else{?>
    <p><?php echo "Welcome ".$_SESSION['username']; ?> </p>
    <p><a href="logout.php">Logout</a></p>
 <?php }?>
        
        </div>
