<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สวนสัตว์ [ADVENTUREZOO]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
   

</head>
<style>
body {
  font-family: "Arial", sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  background-image: url("/images/av.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  color: #fff;
}

.container-custom {
  width: 85%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background: rgba(0, 0, 0, 0.411);
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.137);
}

header {
  padding: 20px 0;
  text-align: center;
}

header img.logo {
  max-height: 150px;
  margin-bottom: 10px;
  border-radius: 10px;
}

h1,
h2,
h3 {
  margin: 0;
  padding: 10px 0;
}

h1 {
  font-size: 2.5em;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.322);
}

h2 {
  font-size: 1.8em;
  border-bottom: 2px solid #4caf50;
  padding-bottom: 5px;
  margin-bottom: 20px;
  color: #4caf50;
}

h3 {
  font-size: 1.4em;
  color: #e0e0e0;
}

.section {
  background: rgba(255, 255, 255, 0.13);
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.103);
}

img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

footer {
  background: rgba(0, 0, 0, 0.3);
  padding: 20px 0;
  color: #fff;
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
  border-top: 1px solid #444;
}

a {
  color: #ffffff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

.video-container {
  position: relative;
  width: 100%;
  max-width: 800px;
  margin: 20px auto;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.178);
}

.video-container img {
  width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 15px;
}

.highlight {
  background: #4caf50;
  color: #fff;
  padding: 10px;
  border-radius: 5px;
  margin: 20px 0;
}

@media (max-width: 768px) {
  .container-custom {
    width: 95%;
  }

  h1 {
    font-size: 2em;
  }

  h2 {
    font-size: 1.5em;
  }
}

.navbar {
  background-color: rgba(0, 0, 0, 0.082);
  /* Ensure background is white */
}

.nav-link {
  color: white;
  /* Change link color to black or any dark color for contrast */
}

.overlay {
  background-color: rgba(0, 0, 0, 0.349);
  min-height: 100vh;
}

/* CSS สำหรับแอนิเมชันไอคอน */
.icon-animated {
  transition: transform 0.3s ease;
}

.icon-animated:hover {
  transform: scale(1.2);
  /* ขยายขนาดไอคอนเมื่อชี้เมาส์ */
}

</style>

<body>
    <div class="bg-image">
        <div class="overlay">
            <!-- Navbar -->
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
                        <img src="/images/adventureZoo.png" alt="Leopard in Adventure Zoo" width="100" height="60" class="me-2">
                        <span class="fs-4 white-text">Adventure Zoo</span>
                    </a>

                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 white-text active"><i class="bi bi-house-door"></i> หน้าหลัก</a></li>
                        <li><a href="contact.php" class="nav-link px-2 white-text"><i class="bi bi-envelope"></i> ติดต่อ</a></li>
                        <li><a href="about.php" class="nav-link px-2 white-text"><i class="bi bi-info-circle"></i> เกี่ยวกับ</a></li>
                    </ul>

                    <div class="col-md-3 text-end">
                        <a href="booking.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> จองตั๋ว</a>
                    </div>
                </header>
            </div>


            <div class="container-custom">
                <a href="index.php" class="btn btn-primary btn-floating">
                    <i class="bi bi-arrow-left icon-animated"></i> กลับไปหน้าหลัก
                </a>
                <header>
                    <h1>สวนสัตว์ [ADVENTUREZOO]</h1>
                </header>

                <section class="section">
                    <h2>เกี่ยวกับเรา</h2>
                    <p>ยินดีต้อนรับสู่สวนสัตว์ [ADVENTUREZOO], สถานที่ที่คุณจะได้สัมผัสกับโลกของสัตว์อย่างใกล้ชิดในบรรยากาศที่อบอุ่นและเป็นมิตร</p>

                    <h3>ประวัติของเรา</h3>
                    <p>สวนสัตว์ [ADVENTUREZOO] ก่อตั้งขึ้นเมื่อปี 2005 โดยกลุ่มผู้รักสัตว์และผู้เชี่ยวชาญด้านการอนุรักษ์สัตว์ป่า เรามุ่งมั่นที่จะเป็นศูนย์กลางการศึกษาสัตว์ป่าและการอนุรักษ์ที่ยั่งยืน ซึ่งสะท้อนถึงความมุ่งมั่นของเราในการสร้างประสบการณ์ที่ไม่เหมือนใครสำหรับผู้เข้าชมทุกคน</p>

                    <h3>ภารกิจและวิสัยทัศน์</h3>
                    <p><strong>ภารกิจ:</strong> เรามุ่งมั่นที่จะให้การศึกษาและประสบการณ์ที่ยอดเยี่ยมเกี่ยวกับสัตว์ป่า และมีบทบาทในการอนุรักษ์สัตว์ที่ใกล้สูญพันธุ์และการปกป้องสิ่งแวดล้อมธรรมชาติ</p>
                    <p><strong>วิสัยทัศน์:</strong> เราหวังว่าจะเป็นผู้นำในการส่งเสริมการอนุรักษ์สัตว์และสิ่งแวดล้อม โดยการสร้างความตระหนักรู้และแรงบันดาลใจให้กับสาธารณชนเพื่อการอนุรักษ์ที่มีประสิทธิภาพและยั่งยืน</p>

                    <h3>ทีมงานของเรา</h3>
                    <p>ทีมงานของเราประกอบด้วยนักวิจัยสัตว์ป่า, ผู้ดูแลสัตว์, นักการศึกษา, และทีมบริหารที่มีประสบการณ์และความเชี่ยวชาญในการทำงานกับสัตว์ เราทุกคนทำงานร่วมกันเพื่อให้แน่ใจว่าสัตว์ของเราได้รับการดูแลอย่างดีที่สุดและผู้เข้าชมได้รับประสบการณ์ที่มีคุณค่าและน่าจดจำ</p>

                    <h3>แหล่งเรียนรู้และความร่วมมือ</h3>
                    <p>เราให้ความสำคัญกับการสร้างความร่วมมือกับองค์กรอนุรักษ์สัตว์ทั้งในประเทศและต่างประเทศ เพื่อร่วมมือในการวิจัย, การอนุรักษ์, และการสร้างโปรแกรมการศึกษา เรามีโครงการร่วมมือกับมหาวิทยาลัยและศูนย์วิจัยเพื่อให้ข้อมูลที่ดีที่สุดเกี่ยวกับพฤติกรรมและสุขภาพของสัตว์</p>

                    <div class="highlight">
                        <p><strong>เยี่ยมชมเรา:</strong> เปิดทุกวันตั้งแต่ 09:00 - 18:00 น. พร้อมกิจกรรมพิเศษในช่วงสุดสัปดาห์!</p>
                    </div>
                </section>

                <section class="section">
                    <h2>สิ่งที่เรามี</h2>
                    <p>ที่สวนสัตว์ [ADVENTUREZOO], คุณจะพบกับ:</p>
                    <ul>
                        <li><strong>การศึกษา:</strong> เรียนรู้เกี่ยวกับพฤติกรรมและลักษณะของสัตว์ รวมถึงความสำคัญของการอนุรักษ์</li>
                        <li><strong>การอนุรักษ์:</strong> การร่วมมือกับองค์กรอนุรักษ์เพื่อสร้างโปรแกรมการขยายพันธุ์และการศึกษาเกี่ยวกับการฟื้นฟูพันธุ์สัตว์</li>
                        <li><strong>การวิจัย:</strong> วิจัยเกี่ยวกับพฤติกรรมและสุขภาพของสัตว์เพื่อการอนุรักษ์ที่ดีขึ้น</li>
                        <li><strong>ความบันเทิง:</strong> กิจกรรมและการแสดงเพื่อความบันเทิงของผู้เข้าชม</li>
                    </ul>

                    <div class="video-container">
                        <img src="https://t3.ftcdn.net/jpg/02/54/70/82/360_F_254708277_wcPjfKTvwuNQU8zzgteO98MAaNIRzTum.jpg" alt="ภาพของสวนสัตว์ [ADVENTUREZOO]">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 สวนสัตว์ [ADVENTUREZOO]. สงวนลิขสิทธิ์.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>