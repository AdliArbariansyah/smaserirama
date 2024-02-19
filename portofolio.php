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
  <title>SMA Serirama YLPI Riau - Portofolio</title>
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
      <marquee width="15%" direction="left"><a class="navbar-brand" href="#">SMA SERIRAMA YLPI RIAU</a></marquee>
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
          <h1 class="font-h1-portofolio">GALERY</h1>
        </div>
      </div>

      <div class="col text-center">
        <h2 class="font-h2-portofolio">My<strong style="color: #17a2b8;"> KEGIATAN </strong></h2>
      </div>
      <div class="row mb-4">
        <?php foreach ($portofolio as $kegiatan) : ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="src/img/<?php echo $kegiatan['gambar']; ?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo $kegiatan['keterangan']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!--End Certificate-->

    </div>
  </section>

</body>

</html>