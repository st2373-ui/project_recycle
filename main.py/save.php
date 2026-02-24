<?php
include "db.php";

$name = $_POST['name'];
$classroom = $_POST['classroom'];
$booking_date = $_POST['booking_date'];
$time_slot = $_POST['time_slot'];
$details = $_POST['details']; // เพิ่มตรงนี้

function generateCode($length = 6) {
    $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    return substr(str_shuffle($chars), 0, $length);
}

$code = generateCode();

$sql = "INSERT INTO bookings 
(name, classroom, booking_date, time_slot, details, status, booking_code)
VALUES 
('$name','$classroom','$booking_date','$time_slot','$details','pending','$code')";

if($conn->query($sql)){
    echo "<script>
    alert('จองสำเร็จ! รหัสของคุณคือ: $code กรุณาจำรหัสนี้ไว้');
    window.location='index.php';
    </script>";
} else {
    echo "Error: " . $conn->error;
}

exit();
?>