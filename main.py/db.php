<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "recycle";

$conn = new mysqli("localhost", "root", "", "recycle");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>