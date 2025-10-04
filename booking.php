<!DOCTYPE html>
<html lang="th">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Adventure Zoo Booking</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="booking.css">
</head>

<body>
  <div class="overlay">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
          <img src="/images/AdventureZoo.png" alt="Leopard in Adventure Zoo" width="100" height="60" class="me-2">
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

      <div class="pricing-header p-3 pb-md-4 mx-auto text-center fade-in">
        <h1 class="display-4 fw-normal text-body-emphasis">
          <i class="bi bi-ticket-perforated icon-spin"></i> Adventure Zoo Packets
        </h1>
        
        <p class="fs-5 text-body-secondary">"พาคุณและครอบครัวมาที่ Adventure Zoo เพื่อพบกับเพื่อนใหม่ที่น่ารักและร่วมสนุกกับกิจกรรมมากมาย!"</p>
      </div>

      <main>
        <form method="post" action="information.php">
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <!-- Card 1 -->
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal"><i class="bi bi-person"></i> เซตเริ่มต้น</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">250<small class="text-body-secondary fw-light">/บาท</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><i class="bi bi-check-circle-fill text-success"></i> จำนวน 1 คน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> เข้าได้ทุกโซน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> ช่วยเหลือทุกเรื่อง</li>
                  </ul>
                  <button type="submit" name="action" value="Type1" class="w-100 btn btn-lg btn-outline-primary">
                    <i class="bi bi-cart-plus"></i> จองเลย
                  </button>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal"><i class="bi bi-people"></i> เชตคู่หู</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">850<small class="text-body-secondary fw-light">/บาท</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><i class="bi bi-check-circle-fill text-success"></i> จำนวน 2-4 คน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> เข้าได้ทุกโซน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> มีให้ห้องรับรอง</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> ช่วยเหลือทุกเรื่อง</li>
                  </ul>
                  <button type="submit" name="action" value="Type2" class="w-100 btn btn-lg btn-primary">
                    <i class="bi bi-cart-plus"></i> จองเลย
                  </button>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal"><i class="bi bi-people-fill"></i> เซตครอบครัว</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">2000<small class="text-body-secondary fw-light">/บาท</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><i class="bi bi-check-circle-fill text-success"></i> จำนวน 5-8 คน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> เข้าได้ทุกโซน</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> ฟรีไกด์นำสวนสัตว์</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> มีให้ห้องรับรอง</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> ช่วยเหลือทุกเรื่อง</li>
                  </ul>
                  <button type="submit" name="action" value="Type3" class="w-100 btn btn-lg btn-primary">
                    <i class="bi bi-cart-plus"></i> จองเลย
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Table to Compare Plans -->
          <h2 class="display-6 text-center mb-4">Compare plans</h2>
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th style="width: 34%;"></th>
                  <th style="width: 22%;">เริ่มต้น</th>
                  <th style="width: 22%;">เชตคู่หู</th>
                  <th style="width: 22%;">เซตครอบครัว</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-start">เข้าได้ทุกโซน</th>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">มีให้ห้องรับรอง</th>
                  <td><i class="bi bi-x-lg text-danger"></i></td>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">ฟรีไกด์นำสวนสัตว์</th>
                  <td><i class="bi bi-x-lg text-danger"></i></td>
                  <td><i class="bi bi-x-lg text-danger"></i></td>
                  <td><i class="bi bi-check-lg text-success"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </main>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <small class="d-block mb-3 text-body-secondary">&copy; suansri 2024</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-house-door"></i> หน้าหลัก</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Booking</h5>
            <ul class="list-unstyled text-small ">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-calendar-check "></i> จองตั๋ว</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-envelope"></i> ติดต่อ</a></li>
            </ul>
          </div>
        </div>
    </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>