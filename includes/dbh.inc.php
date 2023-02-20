<?php

$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = "";
$dBName = "project3";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connnection failed: " . mysqli_connect_error());
}

$admin1 = 17;
$admin2 = 16;
$admin3 = 15;
$admin4 = 19;