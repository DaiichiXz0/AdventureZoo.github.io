
<!DOCTYPE html>
<html lang="th">

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อเรา - สวนสัตว์</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://mrwallpaper.com/images/hd/leopard-in-planet-zoo-video-game-jpdjziqtd41tdska.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #ffffff;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.3);
            min-height: 100vh;
        }

        .header-logo img {
            border-radius: 8px;
        }

        .btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .container.mt-5 {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="container py-4">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-4 pb-3 border-0">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
                    <img src="/images/AdventureZoo.png" alt="Leopard in Adventure Zoo" width="100" height="60" class="me-2">
                    <span class="fs-4 text-white">Adventure Zoo</span>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 link-light"><i class="bi bi-house-door"></i> หน้าหลัก</a></li>
                    <li><a href="contact.php" class="nav-link px-2 link-light"><i class="bi bi-envelope"></i> ติดต่อ</a></li>
                    <li><a href="about.php" class="nav-link px-2 link-light"><i class="bi bi-info-circle"></i> เกี่ยวกับ</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <a href="booking.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> จองตั๋ว</a>
                </div>
            </header>
        </div>

        <div class="container mt-5">
            <h1 class="text-center mb-4"><i class="bi bi-chat-dots"></i> ติดต่อเรา</h1>
            <p class="text-center mb-5 lead">หากคุณมีคำถาม ข้อเสนอแนะ หรือต้องการข้อมูลเพิ่มเติมเกี่ยวกับสวนสัตว์ของเรา กรุณาติดต่อเราได้ตามรายละเอียดด้านล่าง</p>

            <div class="row g-5">
                <div class="col-md-6">
                    <h4><i class="bi bi-geo-alt"></i> ที่อยู่</h4>
                    <p>สวนสัตว์ AdventureZoo<br>
                        เลขที่ 280 ถนน หลังสวน<br>
                        ตำบล หลังสวน, อำเภอ หลังสวน<br>
                        จังหวัด ชุมพร รหัสไปรษณีย์ 86110</p>

                    <h4 class="mt-4"><i class="bi bi-info-circle"></i> ข้อมูลการติดต่อ</h4>
                    <p><i class="bi bi-telephone"></i> โทรศัพท์: 07-890-1234<br>
                        <i class="bi bi-envelope"></i> อีเมล: zoo123@adventure.com<br>
                        <i class="bi bi-clock"></i> เวลาทำการ: เปิดทุกวัน เวลา 09:00 - 18:00 น.
                    </p>
                </div>

                <div class="col-md-6">
                    <h4><i class="bi bi-pencil-square"></i> ฟอร์มติดต่อเรา</h4>
                    <form action="sendemail.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="bi bi-person"></i> ชื่อของคุณ</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="กรอกชื่อของคุณ" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="bi bi-envelope"></i> อีเมลของคุณ</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="กรอกอีเมลของคุณ" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label"><i class="bi bi-chat-text"></i> ข้อความ</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="กรอกข้อความของคุณ" required></textarea>
                        </div>
                        <button type="submit" name="sendemail" class="btn btn-primary w-100"><i class="bi bi-send"></i>ส่งข้อความ</button>
                    </form>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4><i class="bi bi-map"></i> แผนที่</h4>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15719.372498903062!2d99.06727264830052!3d9.947007392489686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30567a0c2a9a441d%3A0xba894a946c57673a!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4Liq4Lin4LiZ4Lio4Lij4Li14Lin4Li04LiX4Lii4Liy!5e0!3m2!1sth!2sth!4v1725274961243!5m2!1sth!2sth" width="100%" height="300" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center text-lg-start mt-5 text-white py-3" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase"><i class="bi bi-info-circle"></i> เกี่ยวกับเรา</h5>
                        <p>AdventureZoo เป็นสวนสัตว์ที่มุ่งมั่นในการอนุรักษ์สัตว์และให้ความรู้แก่ผู้เข้าชม</p>
                    </div>
                    <div class="col-lg-3 mb-4 mb-md-0">
                        <h5 class="text-uppercase"><i class="bi bi-link"></i> ลิงก์ด่วน</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#!" class="text-white">นโยบายความเป็นส่วนตัว</a></li>
                            <li><a href="#!" class="text-white">ข้อกำหนดการใช้งาน</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-uppercase"><i class="bi bi-share"></i> ติดตามเรา</h5>
                        <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>