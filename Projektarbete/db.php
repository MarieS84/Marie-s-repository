<?php
$db_server   = "localhost";
$db_database = "produkter";
$db_username = "root";
$db_password = "";
try{
 $conn = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8", $db_username, $db_password);
 
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Connected successfully"; 
}
catch(PDOException $e){
 echo "Connection failed: " . $e-> getMessage();
}

?>
