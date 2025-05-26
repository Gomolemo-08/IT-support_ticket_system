<?php
$host = "localhost";
$db = "ticket_system";
$user = "root";
$pass = ""; // leave blank for XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
