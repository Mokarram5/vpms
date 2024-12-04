
<?php
// Database connection details
$host = 'localhost';       // Database server IP address
$port = 3306;                 // Default MySQL/MariaDB port (confirm if different)
$username = 'root';       // Your database username
$password = '';  // Your database password
$dbname = 'vpmsdb';           // Your database name

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
?>
