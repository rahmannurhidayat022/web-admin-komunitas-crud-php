<?php include './connection.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- custom css -->
    <link href="./public/assets/css/style.css" rel="stylesheet">
    <title>CRUD PHP</title>
  </head>
  <body>
  <nav class="navbar navbar-light custom-navbar shadow">
    <div class="container-lg">
      <a class="navbar-brand" href="index.php">
        <img src="./public/assets/images/ubuntu-logo.png" alt="" width="30" height="30" class="d-inline-block align-top">
        Linux-id Academy
      </a>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mx-2">
                  <a class="btn btn-small btn-success bg-gradient" href="register-form.php">Tambahkan Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>

  <div id="infoAcademy">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./public/assets/images/linuxid-academy.jpg" class="d-block w-100" alt="./public/assets/images/linuxid-academy.jpg">
          <div class="carousel-caption d-none d-md-block bg-dark bg-gradient rounded-pill">
            <h1 class="text-warning fw-bold">Menjadi Pengguna Linux</h1>
            <a class="btn btn-small btn-primary bg-gradient" href="data-list.php">Lihat Anggota</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./public/assets/images/linuxid-academy2.jpg" class="d-block w-100" alt="./public/assets/images/linuxid-academy2.jpg">
          <div class="carousel-caption d-none d-md-block bg-dark bg-gradient rounded-pill">
            <h1 class="text-primary fw-bold">Belajar Linux Dari Pemula sampai Mahir</h1>
            <p>Tenang! Disini kita belajar bersama...jadi Langsung saja join!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./public/assets/images/linuxid-academy3.jpg" class="d-block w-100" alt="./public/assets/images/linuxid-academy3.jpg">
          <div class="carousel-caption d-none d-md-block bg-dark bg-gradient rounded-pill">
            <h1 class="text-primary fw-bold">Diamond Of Tecnology</h1>
            <p>Bagaikan Permata di tumpukan User Windows..Berharga!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
  
  <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>