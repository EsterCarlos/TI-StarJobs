<?php

$host = "localhost";
$db = "starjobs";
$user = "root";
$pass = "";

$mysqli = new mysqli("localhost","root","","starjobs");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

?>