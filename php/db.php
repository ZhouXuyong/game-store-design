<?php
$host = 'localhost';
$port = 8889; 
$dbname = 'game_store';
$username = 'root';
$password = 'root';

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>