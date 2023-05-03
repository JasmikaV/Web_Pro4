<?php

$servername = "localhost";
$username = "jvemulapalli1";
$password = "jvemulapalli1";
$dbname = "jvemulapalli1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>