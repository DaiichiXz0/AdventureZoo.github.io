<?php
require_once "config.php" ;
// รับข้อมูลจากฟอร์ม
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$guests = $_POST['guests'];
$Type = $_POST['type'];
$price = 0;
if ($Type == 'Starter') {
    $price = 250; // ราคาStarter
} elseif ($Type == 'Duo') {
    $price = 850; // ราคาDuo
} elseif ($Type == 'Family') {
    $price = 2000; // ราคาFamily
} else {
    $price = 0; // กรณีที่ไม่มีประเภทที่ตรงกัน ให้ราคาเป็น 0
}

// เตรียมคำสั่ง SQL ที่ถูกต้อง
$sql = "INSERT INTO bookings (name, email, phone, date, guests, type, price) VALUES (?, ?, ?, ?, ?, ?, ?)";

// เตรียมการสำหรับการป้องกัน SQL Injection
$stmt = $conn->prepare($sql);

// ตรวจสอบว่าการเตรียมคำสั่งสำเร็จหรือไม่
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// ผูกพารามิเตอร์กับคำสั่ง SQL
$stmt->bind_param('ssssisi', $name, $email, $phone, $date, $guests, $Type,  $price);

// ดำเนินการคำสั่ง SQL
if ($stmt->execute()) {
} else {
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();

$date = date_create();
$buddhistYear = date('Y') + 543;

// แปลงเดือนเป็นภาษาไทย
$thaiMonthName = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
$month = $thaiMonthName[date('m') - 1];


?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ใบเสร็จและตั๋วเข้าสวนสัตว์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100 p-4 font-sans">
    <div class="container-custom">
        <a href="index.php" class="btn btn-primary btn-floating">
            <i class="bi bi-arrow-left"></i> กลับไปหน้าหลัก
        </a>
        <div class="max-w-2xl mx-auto">
            <!-- ใบเสร็จ -->
            <div class="bg-white p-8 rounded-t-lg shadow-md">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h1 class="text-3xl font-bold text-green-600">Adventure Zoo</h1>
                        <p class="text-sm text-gray-600">เลขที่ 280 ถนน หลังสวน 8 ตำบล หลังสวน อำเภอหลังสวน ชุมพร 86110</p>
                    </div>
                    <img src="https://cdn.discordapp.com/attachments/1110521196639944735/1422974244035362846/AdventureZoo.png?ex=68de9f89&is=68dd4e09&hm=a99d9dcfe8027d1147739aa7205a114e74d3e0babdf9d51df3a2a367febf735a&" alt="โลโก้สวนสัตว์" class="w-20 h-20 object-contain" />
                </div>

                <div class="mb-6">
                    <h2 class="text-2xl font-semibold mb-2">ใบเสร็จรับเงิน</h2>
                    <p class="text-sm text-gray-600">หมายเลขคำสั่งซื้อ: #TH12345</p>
                    <p class="text-sm text-gray-600"><?php echo date_format($date, "d {$month} {$buddhistYear} H:i:s"); ?></p>
                </div>

                <div class="border-t border-b border-gray-200 py-4 mb-6">
                    <div class="flex justify-between text-sm font-medium mb-2">
                        <span>รายการ</span>
                        <span>ราคา</span>
                    </div>
                    <div class="flex justify-between text-sm mb-1">
                        <span><?php echo htmlspecialchars($Type); ?></span>
                        <span><?php echo htmlspecialchars($price); ?></span>
                    </div>

                </div>

                <div class="mb-6">

                    <div class="flex justify-between font-bold text-lg text-green-600">
                        <span>ยอดรวมทั้งสิ้น</span>
                        <span><?php echo htmlspecialchars($price); ?> บาท</span>
                    </div>
                </div>

                <div class="text-center text-sm text-gray-600 mt-6">
                    <p>ขอบคุณที่ใช้บริการสวนสัตว์มหัศจรรย์</p>
                    <p>หากมีข้อสงสัย กรุณาติดต่อ 02-123-4567</p>
                </div>
            </div>

            <!-- ตั๋วเข้าสวนสัตว์ -->
            <div class="bg-green-500 p-6 rounded-b-lg shadow-md text-white">
                <div class="border-2 border-white p-4 rounded-lg">
                    <h2 class="text-2xl font-bold mb-2 text-center">ตั๋วเข้าสวนสัตว์</h2>
                    <div class="flex justify-between mb-2">
                        <span>เซตเริ่มต้น</span>
                        <span>x 1</span>

                        <div class="text-center">
                            <p class="font-semibold"><?php echo date_format($date, "d {$month} {$buddhistYear} H:i:s"); ?></p>
                            <p class="text-sm">เวลาเปิด: 09:00 น. - 18:00 น.</p>
                        </div>
                    </div>
                    <div class="mt-4 text-center text-sm">
                        <p>โปรดแสดงตั๋วนี้ที่ทางเข้าสวนสัตว์</p>
                        <p>ขอให้สนุกกับการเยี่ยมชมสวนสัตว์ของเรา!</p>

                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: "Good job!",
                    text: "จองตั๋วสำเร็จเรียบร้อย!",
                    icon: "success"
                }); 
            </script>
</body>

</html>