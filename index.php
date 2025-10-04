<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure Zoo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<style>
  .bg-image {
  background-image: url("https://mrwallpaper.com/images/hd/leopard-in-planet-zoo-video-game-jpdjziqtd41tdska.jpg");
  background-size: cover;
  background-position: center;
  min-height: 100vh;
}
.overlay {
  background-color: rgba(0, 0, 0, 0.3);
  min-height: 100vh;
}
.white-text {
  color: white !important;
}
.fade-in {
  animation: fadeIn 1.5s;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.slide-up {
  animation: slideUp 1s;
}
@keyframes slideUp {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
.card {
  transition: transform 0.3s;
}
.card:hover {
  transform: translateY(-10px);
}

</style>
<body>
  <div class="bg-image">
    <div class="overlay">
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
            <img src="\AdventureZoo\images/AdventureZoo.png" alt="Leopard in Adventure Zoo" width="100" height="60" class="me-2">
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

      <div class="px-4 py-5 my-5 text-center fade-in">
        <h1 class="display-5 fw-bold white-text mb-4">Welcome to Adventure Zoo</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4 white-text">พร้อมให้คุณสัมผัสประสบการณ์แห่งการผจญภัยในโลกของสัตว์นานาชนิด</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="booking.php" class="btn btn-primary btn-lg px-4 gap-3"><i class="bi bi-ticket-perforated"></i> จองบัตรสวนสัตว์</a>
          </div>
        </div>
      </div>

      <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom white-text text-center mb-5">สิ่งที่คุณจะได้พบที่ Adventure Zoo</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 slide-up">
          <div class="col">
            <div class="card h-100 shadow">
              <img src="https://www.expedia.co.th/stories/wp-content/uploads/2022/07/safari-park.jpg" class="card-img-top" alt="Safari Park">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-binoculars-fill"></i> สวนสัตว์ผจญภัย</h5>
                <p class="card-text">สวนสัตว์... ไม่ใช่แค่สวนสัตว์! มาผจญภัยไปกับโลกของสัตว์นานาชนิดที่ Adventure Zoo</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow">
              <img src="https://www.nairobroo.com/wp-content/uploads/2020/05/%E0%B9%80%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%97%E0%B8%B8%E0%B8%81%E0%B8%A1%E0%B8%B8%E0%B8%A1%E0%B9%82%E0%B8%A5%E0%B8%81-%E0%B8%9C%E0%B9%88%E0%B8%B2%E0%B8%99-livestream-cover1.jpg" class="card-img-top" alt="Zoo Experience">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-heart-fill"></i> ประสบการณ์สุดพิเศษ</h5>
                <p class="card-text">สวนสัตว์ที่ไม่เหมือนใคร พร้อมมอบประสบการณ์สุดพิเศษให้คุณและครอบครัว ได้เรียนรู้และสัมผัสธรรมชาติอย่างใกล้ชิด</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow">
              <img src="https://pailin.voicetv.co.th/assets/aW1hZ2UvMjAyMC0wNC85MGE2Y2Q1MDc3NzY1MjM5MWFmNDcwYjRhMThhYzJkZS5qcGc=" class="card-img-top" alt="Cute Animals">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-emoji-smile-fill"></i> สัตว์น่ารัก</h5>
                <p class="card-text">พบกับสัตว์นานาชนิด ทั้งสัตว์ป่าหายากและสัตว์เลี้ยงลูกด้วยนมน่ารักๆ</p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Kanit', sans-serif;
  }
</style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>