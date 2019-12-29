<?php
$servername = "localhost";
$username = "id8371188_root";
$password = "root123";
$dbname = "id8371188_leave2";

// Create connection
$conn = new mysqli($servername, $username,
	$password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
