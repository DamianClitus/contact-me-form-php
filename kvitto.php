<?php
require 'data.php';
$conn    	= Connect();
$anv_namn   = $conn->real_escape_string($_SERVER['SERVER_NAME']);
$fNamn      = $conn->real_escape_string($_POST['fNamn']);
$eNamn   	= $conn->real_escape_string($_POST['eNamn']);
$email    	= $conn->real_escape_string($_POST['email']);
$meddelande = $conn->real_escape_string($_POST['meddelande']);
$datum      = Date("y/m/d - l");


$query   	= "INSERT INTO daniel_kontakt(fNamn, eNamn, email, meddelande, datum)"
	     	. "VALUES ('$fNamn','$eNamn','$email','$meddelande','$datum')";
$success 	= $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}



echo 'Tack!'
?>

<?php
$conn->close();
?>
