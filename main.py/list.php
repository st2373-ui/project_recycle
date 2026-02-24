<?php
include "db.php";

$sql = "SELECT * FROM bookings 
        WHERE status='pending'
        ORDER BY booking_date ASC";

$result = $conn->query($sql);
?>

<h2 style="text-align:center;">คิวที่กำลังรอ</h2>

<table>
<tr>
<th>ชื่อ</th>
<th>ชั้น</th>
<th>วันที่</th>
<th>เวลา</th>
<th>จัดการ</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['classroom']}</td>
    <td>{$row['booking_date']}</td>
    <td>{$row['time_slot']}</td>
    <td>
        <a href='done.php?id={$row['id']}'>เสร็จแล้ว</a>
    </td>
    </tr>";
}
?>
</table>