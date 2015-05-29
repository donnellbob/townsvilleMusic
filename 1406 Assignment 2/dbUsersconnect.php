<?php
try {
    $dbh = new PDO("sqlite:registeredUsers"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>

