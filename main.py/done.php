<?php
include "db.php";

$id = $_GET['id'];

$sql = "UPDATE bookings 
        SET status='done' 
        WHERE id='$id'";

$conn->query($sql);

header("Location: index.php");
exit();
?>