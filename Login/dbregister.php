<?php
include("dbconnect.php");
$debugOn = true;
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); 
echo "</pre>";

if(empty($_REQUEST[email]) || empty($_REQUEST[password])|| empty($_REQUEST[firstName]) || empty($_REQUEST[surname]) ){
    echo "<p><a href='register.php'>It appears a required field was missing</a></p>";

}else{
    
    $encryptPass = md5($_REQUEST[password]);                   
    $sql = "INSERT INTO registeredUsers (email, password, firstName, surname, postalAddress, phoneDay, phoneNight, mobile) VALUES ('$_REQUEST[email]', '$encryptPass', '$_REQUEST[firstName]', '$_REQUEST[surname]', '$_REQUEST[postalAddress]', '$_REQUEST[phoneDay]', '$_REQUEST[phoneNight]', '$_REQUEST[mobile]')";
    echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
    echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
    if($dbh->exec($sql)){
        echo "Updated $_REQUEST[firstName]";
    }else{
            echo "Not updated";
    }
}
    



echo "</strong></p>\n";

$dbh = null;
?>
<p><a href="register.php">Just for testing link</a></p>
<p><a href="login.php">Login test</a></p>
</body>
</html>