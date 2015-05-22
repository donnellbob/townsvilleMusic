<?php
include("dbconnect.php")
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
</head>

<body>
<h1>Register</h1>    
<form id="insert" name="insert" method="post" action="dbregister.php">
<fieldset>              
    <h2>Fill out the following to register</h2>
    <p>
      <label for="email">**Email Adress(will be username): </label>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label for="password">**Password: </label>
      <input type="password" name="password" id="password">
    </p>
    <p>
      <label for="firstName">**First name: </label>
      <input type="text" name="firstName" id="fistName">
    </p>
    <p>
      <label for="surname">**Surname: </label>
      <input type="text" name="surname" id="surname">
    </p>
    <p>
      <label for="postalAdress">Postal Address: </label>
      <input type="number" name="postalAddress" id="postalAddress">
    </p>
    <p>
      <label for="phoneDay">Phone Day: </label>
      <input type="number" name="phoneDay" id="phoneDay">
    </p>
    
    <p>
      <label for="phoneNight">Phone After Hours:  </label>
      <input type="number" name="phoneNight" id="phoneNight">
    </p>
    
    <p>
      <label for="mobile">Mobile: </label>
      <input type="number" name="mobile" id="mobile">
    </p>
    
    <p>
      <input type="submit" name="submit" id="submit" value="Submit">
        <br>
        **Required field.
    </p>
</fieldset>    
    
</form>
  
<?php
// close the database connection
$dbh = null;
?>
    
</body>    
    
    
</html>