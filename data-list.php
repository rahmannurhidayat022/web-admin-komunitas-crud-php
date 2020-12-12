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

    <title>List Anggota</title>
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
                  <a class="btn btn-small btn-success bg-gradient" href="register-form.php">Tambakan Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
  <div id="data-list">
    <div class="container-lg">
      <?php if(isset($_GET['status'])): ?>
        if($_GET['status'] == 'failed-delete') {
          echo '
            <div class="alert alert-danger" role="alert">
              Opps...Gagal Menghapus,coba lagi!
            </div>
            ';
        }
      <?php endif; ?>
      <div class="row my-5">
        <?php 
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($connect, $sql);
        ?>
        <?php while($mhs = mysqli_fetch_array($query)): ?>
          <div class="col-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">ID CARD</div>
              <div class="card-body">
                <h5 class="card-title text-center mb-4"><?php echo $mhs['nama']; ?></h5>
                <ul class="list-unstyled">
                  <li>
                    <div class="row">
                      <div class="col">NPM : </div>
                      <div class="col"><?php echo $mhs['npm']; ?></div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col">Alamat : </div>
                      <div class="col"><?php echo $mhs['alamat']; ?></div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col">Kelamin : </div>
                      <div class="col"><?php echo $mhs['jenis_kelamin']; ?></div>
                    </div>  
                  </li>
                  <li>
                    <div class="row">
                      <div class="col">Jurusan : </div>
                      <div class="col"><?php echo $mhs['jurusan']; ?></div>
                    </div>  
                  </li>
                  <li>
                    <div class="row">
                      <div class="col">No.Telp : </div>
                      <div class="col"><?php echo $mhs['no_telp']; ?></div>
                    </div>  
                  </li>
                </ul>
                <div class="row mt-5 p-0">
                  <div class="col">
                    <?php echo'<a href="update-form.php?npm='.$mhs['npm'].'" class="btn btn-block btn-warning w-100">Edit</a>'; ?>
                  </div>
                  <div class="col">
                    <?php echo '<a href="delete.php?npm='.$mhs['npm'].'"'.' class="btn btn-block btn-danger w-100">Hapus</a>' ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

<!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>