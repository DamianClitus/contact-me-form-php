<?php

function Connect() {
// Definera variabler
$dbhost  = "localhost"; // Server
$dbuser  = "ad38198";  // Användare för databasen
$dbpass  = base64_decode("RGFuaWVsQDEy"); // Lösenord för databasen
$dbname  = "ad38198";  // Namn på databasen


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);


// Change character set to utf8
mysqli_set_charset($conn,"utf8");

 return $conn;
}
 
?>
