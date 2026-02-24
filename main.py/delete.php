<?php
include "db.php";

$code = $_GET['code'];

$sql = "DELETE FROM bookings WHERE booking_code='$code'";
$conn->query($sql);

echo "<script>
alert('ลบการจองเรียบร้อย');
window.location='index.php';
</script>";

exit();
?>