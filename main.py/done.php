<?php
include "db.php";

$code = $_GET['code'];

$sql = "UPDATE bookings SET status='done' WHERE booking_code='$code'";
$conn->query($sql);

header("Location: check.php?code=".$code);
exit();
?>