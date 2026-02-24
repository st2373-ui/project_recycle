<?php
include "db.php";

$name = $_POST['name'];
$classroom = $_POST['classroom'];
$booking_date = $_POST['booking_date'];
$time_slot = $_POST['time_slot'];

$sql = "INSERT INTO bookings 
(name, classroom, booking_date, time_slot, status)
VALUES 
('$name','$classroom','$booking_date','$time_slot','pending')";

$conn->query($sql);

header("Location: index.php");
exit();
?>