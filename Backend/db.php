<?php
$host = "localhost";
$user = "root";
$pass = "";  // your MySQL password
$db   = "placement_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
