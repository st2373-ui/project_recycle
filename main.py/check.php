<?php include "db.php"; ?>

<h2>ตรวจสอบการจอง</h2>

<form method="GET">
    <input type="text" name="code" placeholder="กรอกรหัสจอง" required>
    <button type="submit">ค้นหา</button>
</form>

<hr>

<?php
if(isset($_GET['code'])){
    $code = $_GET['code'];

    $sql = "SELECT * FROM bookings WHERE booking_code='$code'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        echo "<h3>รายละเอียด</h3>";
        echo "ชื่อ: ".$row['name']."<br>";
        echo "ห้อง: ".$row['classroom']."<br>";
        echo "วันที่: ".$row['booking_date']."<br>";
        echo "เวลา: ".$row['time_slot']."<br>";
        echo "รายละเอียด: ".$row['details']."<br>";
        echo "สถานะ: ".$row['status']."<br><br>";

        if($row['status'] != 'done'){
            echo "<a href='done.php?code=".$code."'>
            <button>เสร็จแล้ว</button></a><br><br>";
        }

        echo "<a href='delete.php?code=".$code."' 
        onclick=\"return confirm('ยืนยันการลบ?')\">
        <button>ลบการจอง</button></a>";

    } else {
        echo "ไม่พบรหัสนี้";
    }
}
?>

<br><br>
<a href="index.php">กลับหน้าแรก</a>