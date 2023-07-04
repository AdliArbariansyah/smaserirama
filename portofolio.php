<?php
require 'functions.php';

$portofolio = query("SELECT * FROM portofolio");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap Offline -->

  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script>
    $(window).on('load', function() {
      $(".preloader").fadeOut("slow");
    });
  </script>
  <title>Adli Arbariansyah - Portofolio</title>
  <link rel="icon" href="src/img/Adli Arbariansyah.png">
</head>

<body>

  <div class="preloader">
    <div class="loading">
      <div rule="status">
        <img src="src/img/PVtR.gif" width="300">
      </div>
    </div>
  </div>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info mb-3 margin-navbar">
    <div class="container">
      <marquee width="15%" direction="left"><a class="navbar-brand" href="#">ADLI ARBARIANSYAH</a></marquee>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav " aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_portofolio.php" target="blank">Tambah Portofolio <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="portfolio" class="portfolio bg-light pb-4">
    <div class="container">
      <div class="row mb-3  pt-5">
        <div class="col text-center">
          <h1 class="font-h1-portofolio">PORTFOLIO</h1>
        </div>
      </div>

      <div class="col text-center">
        <h2 class="font-h2-portofolio">My<strong style="color: #17a2b8;"> Sertifikat </strong></h2>
      </div>


      <div class="row mb-4">
        <?php foreach ($portofolio as $row) : ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="src/img/<?= $row["gambar"]; ?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?= $row["keterangan"]; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!--End Certificate-->
      <!-- Awal My Desain -->
      <div class="col text-center mt-5">
        <h2 class="font-h2-portofolio">My <strong style="color: #17a2b8;">Desain</strong></h2>
      </div>


      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="src/img/Spanduk Rossi Audio Ukuran 1,5M X 1,5 M.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Desain Spanduk</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="src/img/Sertifikat Penghargaan.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text ">Desain Sertifikat</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="src/img/Adli Arbariansyah_KAMMI.2022_Universitas Islam Riau_Pemuda Sebagai Tonggak Agama dan Wajah Bangsa.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Desain Lomba Poster KAMMI Pekanbaru (Juara II)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="src/img/Sahabat Kode.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text ">Desain Logo ( Sahabat Kode )</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="src/img/Desain Poster Promosi.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text ">Desain Promosi</p>
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="src/img/KPA KHOARSIS ADVENTURE.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text" style="font-weight: bold">Desain Logo ( KHOARSIS )</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="src/img/Promosi CV.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Desain CV ( Curriculum Vitae )</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="src/img/Desain Promosi Poster.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text ">Desain CV ( Curriculum Vitae )</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>