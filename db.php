<?php

$servername = "localhost:3306";
$username = "root";
$password = "Sakshi@1112";
$db = "Online_Store";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
