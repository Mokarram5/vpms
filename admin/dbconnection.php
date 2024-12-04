<?php
$servername = "localhost";
$username = "root";
$password = "pwskills";
$dbname = "vpmsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connectiondb
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>
