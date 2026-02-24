<?php
include "db.php";

$sql = "SELECT * FROM bookings ORDER BY booking_date ASC, time_slot ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>รายการจองทั้งหมด</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
            background: #f4f6f8;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #2ecc71;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .back-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>รายการจองรีไซเคิล</h2>

<table>
    <tr>
        <th>ชื่อ</th>
        <th>ชั้น</th>
        <th>วันที่</th>
        <th>เวลา</th>
        <th>ชนิดพลาสติก</th>
    </tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['classroom']}</td>
            <td>{$row['booking_date']}</td>
            <td>{$row['time_slot']}</td>
            <td>{$row['details']}</td>
          </tr>";
}
?>

</table>

<a href="index.php" class="back-btn">กลับหน้าแรก</a>

</body>
</html>

<?php
$conn->close();
?>