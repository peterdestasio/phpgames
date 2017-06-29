<?php

$hostname = "localhost";
$username = "root";
$password = "";
$DBName = "games";

//Create connection
$conn = new mysqli($hostname, $username, $password, $DBName);

//Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
?>