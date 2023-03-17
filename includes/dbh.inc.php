<?php

$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = "";
$dBName = "project3";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connnection failed: " . mysqli_connect_error());
}
//Admins
$admin1 = 123457;
$admin2 = 123458;
$admin3 = 15;
$admin4 = 19;

<<<<<<< HEAD
//Codes
$reedemcode1 = "LanaRhoades";
$reedemcode2 = "MiaKhalifa";
$reedemcode3 = "jhohnnysins";
=======
?>
>>>>>>> dbf77fb911c9dcd4bddf2966e81527f5f3c79fc8
