<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'project3');

print_r($_SESSION);