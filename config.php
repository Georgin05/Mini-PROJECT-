<?php
// db_connect.php
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'WMS';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4'); // optional, but recommended
