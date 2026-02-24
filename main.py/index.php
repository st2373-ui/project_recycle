<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ระบบลงทะเบียนรีไซเคิล</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>ลงทะเบียนนำพลาสติกมาแยก</h1>

    <form action="save.php" method="POST">

        <!-- ชื่อ -->
        <label>ชื่อ - นามสกุล</label>
        <input type="text" name="name" required>

        <!-- ชั้น -->
        <label>ระดับชั้น</label>
        <select name="classroom" required>
            <option value="">-- เลือกระดับชั้น --</option>
            <option value="ม.1">ม.1</option>
            <option value="ม.2">ม.2</option>
            <option value="ม.3">ม.3</option>
            <option value="ม.4">ม.4</option>
            <option value="ม.5">ม.5</option>
            <option value="ม.6">ม.6</option>
        </select>

        <!-- วันที่ -->
        <label>วันที่เข้ามารีไซเคิล</label>
        <input type="date" name="booking_date" required>

        <!-- เวลา -->
        <label>ช่วงเวลา</label>
        <select name="time_slot" required>
            <option value="">-- เลือกเวลา --</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
        </select>

        <!-- ชนิดพลาสติก -->
        <label>ชนิดพลาสติก</label>
        <select name="details" required>
            <option value="">-- เลือกชนิดพลาสติก --</option>
            <option value="ขวดน้ำ PET">ขวดน้ำ PET</option>
            <option value="ถุงพลาสติก">ถุงพลาสติก</option>
            <option value="กล่องอาหารพลาสติก">กล่องอาหารพลาสติก</option>
            <option value="แก้วพลาสติก">แก้วพลาสติก</option>
            <option value="ฝาขวด">ฝาขวด</option>
        </select>

        <button type="submit">บันทึกข้อมูล</button>
        <a href="list.php" class="view-btn">ดูรายการจองทั้งหมด</a>
        <hr>
<a href="check.php">
    <button type="button">ตรวจสอบ / จัดการคิว</button>
</a>

    </form>
</div>

</body>
</html>