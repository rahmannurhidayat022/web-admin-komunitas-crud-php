<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="./public/assets/css/style.css" rel="stylesheet">

    <title>Data Update</title>
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
                  <a class="btn btn-small btn-success bg-gradient" href="data-list.php">Anggota</a>
              </li>
              <li class="nav-item mx-2">
                  <a class="btn btn-small btn-success bg-gradient" href="register-form.php">Tambahkan Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
<!--  -->
  <div id="update-section" class="my-5">
      <div class="container-lg shadow p-5 rounded-3">
        <?php if(isset($_GET['status'])) : ?>
          <?php 
          if($_GET['status'] == 'failed-update') {
            echo '
            <div class="alert alert-danger" role="alert">
              Opps...Ada kesalahan Pneginputan,coba lagi!
            </div>
            ';
          }

          if(!isset($_GET['npm'])) {
            header('Location: data-list.php');
          }
          ?>
        <?php endif; ?>
        <!--  -->
        <?php  
          $npm_get = $_GET['npm'];
          $perintah = "SELECT * FROM mahasiswa WHERE npm=$npm_get";
          $queryy = mysqli_query($connect, $perintah);
          $dataTunggal = mysqli_fetch_assoc($queryy);
          
          if(mysqli_num_rows($queryy) < 1) {
            die("data tidak ada...");
          }
        ?>
      <div class="row g-5">
        <div class="col-lg-7 col-md-12">
          <img src="https://source.unsplash.com/random/" width="100%" class="img-fluid d-block mx-auto rounded-3" alt="Register images">
        </div>
        <div class="col-lg-5 col-md-12">
          <form class="needs-validation" action="" method="POST">
            <h1>Update Data</h1>
            <div class="mb-3">
              <label for="npm" class="form-label">Nomor Induk Mahasiswa</label>
              <?php 
              echo '
              <input type="number" max="99999999" name="npm" class="form-control"
              id="npm" aria-describedby="Npm please" value="'.$dataTunggal['npm'].'" readonly="readonly">
              ';
              ?>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <?php 
              echo '
              <input type="text" name="name" value="'.$dataTunggal['nama'].'" class="form-control" id="name" required>
              '
              ?>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat Lengkap</label>
              <?php 
              echo '
              <input type="text" value="'.$dataTunggal['alamat'].'" name="address" class="form-control" id="address" required>
              ';
              ?>
            </div>
            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" value="'.$genre.'" name="kelamin" id="kelamin" aria-label="Pilih Kelamin" required>
                <option>Pilih ...</option>
                <option value="1" <?php echo ($dataTunggal['jenis_kelamin'] == "Laki-laki") ? "selected": ""?> >Laki-laki</option>
                <option value="2" <?php echo ($dataTunggal['jenis_kelamin'] == "Perempuan") ? "selected": ""?>>Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <?php 
              echo '
              <input type="text" value="'.$dataTunggal['jurusan'].'" name="jurusan" class="form-control" id="jurusan" required>
              ';
              ?>
            </div>
            <div class="mb-3">
              <label for="tlp" class="form-label">No.Telp</label>
              <?php 
              echo '
              <input type="number" max="999999999" value="'.$dataTunggal['no_telp'].'" name="tlp" class="form-control" 
              id="tlp" aria-describedby="Npm please" required>
              ';
              ?>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php 
  if(isset($_POST['submit'])) {
    // $npm = $_POST['npm'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    if($_POST['kelamin'] == "1") {
      $genres = "Laki-laki";
    } else if($_POST['kelamin'] == "2") {
      $genres = "Perempuan";
    }
    $jurusan = $_POST['jurusan'];
    $tlp = $_POST['tlp'];
    $sql = "UPDATE mahasiswa SET nama='$name', alamat='$address', jenis_kelamin='$genres', 
    jurusan='$jurusan', no_telp='$tlp' WHERE npm='$npm_get';";
    $query = mysqli_query($connect, $sql);
    if($query) {
      header('Location: data-list.php');
    } else {
      header('Location: register-form.php?status=failed-update');
    }
  }
  ?>

    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>