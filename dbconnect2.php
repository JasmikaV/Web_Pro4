<?php

$servername = "localhost";
$username = "jvemulapalli1";
$password = "jvemulapalli1";
$dbname = "jvemulapalli1";


// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>