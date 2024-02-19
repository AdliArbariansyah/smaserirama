<?php
require 'functions.php';

$portofolio = query("SELECT * FROM portofolio ORDER BY id_portofolio DESC LIMIT 1");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- Bootstrap Offline -->
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-234680096-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-234680096-1');
  </script>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <title>SMA SERIRAMA YLPI RIAU</title>
  <link rel="icon" href="src/img/Foto Adli Arbariansyah, S.T.jpg">
</head>

<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info mb-3 margin-navbar">
    <div class="container">
      <marquee width="15%" direction="left"><a class="navbar-brand" href="index.html">SMA SERIRAMA YLPI RIAU</a></marquee>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav " aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">Vokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid responsive ">
    <div class="container text-center mt-5">
      <img src="src/img/logo sera.png" width="25%" class="rounded-circle img-thumbnail"> <!-- class="rounded-circle" cara Membuat foto bulat -->
      <h1 class="display-4 text-stroke-red" style="font-weight: bold; color:red; font-size:70px;">SMA SERIRAMA YLPI RIAU</h1>
      <p class="text-stroke-black" style="color: black; font-size:50px;">PROGRAM PENDIDIKAN VOKASI</p>
      <a href="https://bit.ly/ppdbsmasera" type="button" class="btn btn-info" style="font-weight: bold; font-style:italic; font-size: 15px; margin-bottom: 5px;">DAFTAR SEKARANG</a>
    </div>
  </div>
  <!-- end jumbotron -->

  <!-- section about -->
  <section id="about" class="about">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h1 class="profile-h1">VISI & MISI <span style="color: red;">SMA SERIRAMA YLPI RIAU</span></h1>
          <div class="line"></div>
        </div>
      </div>
      <div class="row justify-content-center mb-5">

        <div class="col-md-6 about-info">
          <h1 class="about-h1">Visi</h1>
          <!-- <div class="line"></div> -->
          <p style="font-style: italic;">Menjadi Sekolah Menengah Atas Terdepan “Marketing Kreatif” Berbasis Iman dan Taqwa di Sumatera pada Tahun 2032.</p>
        </div>

        <div class="col-md-6 text-justify about-responsive">
          <h1 class="about-h1">Misi</h1>
          <p>
            a. Melaksanakan Pendidikan dan Pengajaran Berbasis IMTAQ dan IPTEKS.<br>
            b. Melaksanakan Program Pendidikan Berstandar Kompetensi Keahlian (Vokasi).<br>
            c. Penggunaan Teknologi Informasi dalam Proses Pembelajaran.<br>
            d. Proses Pembelajaran dengan Menerapkan Sapta Budaya Sekolah :<br>
            1. Budaya belajar.<br>
            2. Budaya disiplin.<br>
            3. Budaya bersih.<br>
            4. Budaya persatuan dan persaudaraan.<br>
            5. Budaya mutu.<br>
            6. Budaya kerja keras.<br>
            7. Budaya 5 S (Salam, Senyum, Sapa, Sopan, Santun).<br>
            e. Indikator – indikator.<br>
            1. Sempurna dalam Iman dan Akhlak.<br>
            2. Unggul dalam proses pembelajaran.<br>
            3. Unggul dalam kompetensi keahlian (vokasi).<br>
            4. Unggul dalam menciptakan lulusan berdaya saing.<br>
            5. Unggul dalam sarana dan prasarana.<br>
            6. Unggul dalam kompetisi akademik maupun non akademik. </p>

        </div>

      </div>
    </div>
  </section>
  <!-- end about -->
  <!--  Service -->
  <section id="education" class="education mb-5 mt-2">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h1 class="education-h1">VOKASI</h1>
          <div class="line"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/Foto Vokasi.JPG" width="300px" height="250px" class="gambar-swiper rounded-circle">
                </div>
                <p class="p-swiper p-swiper-title">REKAYASA PERANGKAT LUNAK</p>
                <p class="p-swiper1 ">Jurusan yang mempelajari tentang prinsip dan teknik mendesain perangkat lunak yang mudah untuk digunakan serta tepat guna</p>
              </div>
              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/Tataboga.jpg" width="300px" height="250px" class="gambar-swiper rounded-circle">
                </div>
                <p class="p-swiper p-swiper-title">TATABOGA</p>
                <p class="p-swiper1"> Jurusan yang mempelajari mengenai seni mengolah makanan, mulai dari persiapan, pengolahannya, hingga cara menghidangkan makanan.</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/multimedia.jpg" width="300px" height="250px" class="gambar-swiper rounded-circle">
                </div>
                <p class="p-swiper p-swiper-title-sma"> MULTIMEDIA</p>
                <p class="p-swiper1 p-swiper1-description"> Jurusan yang fokus mempelajari penggunaan komputer untuk menyajikan suara, teks, gambar, animasi bahkan video dengan software tertentu.</p>
              </div>
              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/bisnis daring & pemasaran.jpg" width="200px" height="230px" class="gambar-swiper-uir rounded-circle">
                </div>
                <p class="p-swiper p-swiper-title"> BISNIS DARING & PEMASARAN</p>
                <p class="p-swiper1 p-swiper1-description" style="font-size: 13px;"> Jurusan yang mempelajari dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media online</p>
              </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-prev"></div>
            <div class="swiper-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end education -->

  <!-- section portfolio -->
  <section id="portfolio" class="portfolio pb-4 mt-5">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h1 class="portfolio-h1">GALERY</h1>
          <div class="line"></div>
        </div>
      </div>

      <div class="row mb-4">
        <?php foreach ($portofolio as $kegiatan) : ?>
          <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="src/img/<?php echo $kegiatan['gambar']; ?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kegiatan 1</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>



      <div class="container">
        <div class="col text-center">
          <a href="portofolio.php" style="font-weight: bold; font-style:italic" class="btn btn-info" type="button"> View All Galery >> </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end portfolio -->

  <!-- section contact -->
  <section id="contact" class="contact mb-5 mt-5">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2 class="contact-h2">CONTACT US</h2>
          <div class="line"></div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 mb-5">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Media Sosial</h5>
              <div class="card-text">
                <a href="https://www.facebook.com/" target="blank" class="medsos"><img src="src/img/facebook.png" width=50px;></a>

                <a href="https://www.instagram.com/smaseriramaylpiriau" target="blank" class="medsos"><img src="src/img/Instagram.png" width=50px;></a>

                <a href="https://api.whatsapp.com/" target="blank" class="medsos"><img src="src/img/WA.png" width=50px;></a>

              </div>

            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item">
              <h1 class="location-h1">Location</h1>
            </li>
            <li class="list-group-item">School</li>
            <li class="list-group-item">Jalan Teratai No.29 Senapelan, Pekanbaru</li>
            <li class="list-group-item">Riau,Indonesia</li>
          </ul>
        </div>


        <div class="col-lg-6">
          <form action="add_pesan.php" method="POST">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
            </div>

            <div class="form-group">
              <label for="notelp">No.Telp</label>
              <input type="text" name="no_hp" class="form-control" id="notelp" placeholder="Masukkan No Handphone" required>
            </div>

            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea name="isi_pesan" id="pesan" class="form-control" placeholder="Masukkan Pesan Anda" required></textarea>
            </div>

            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-info">Kirim Pesan</button>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!--End Contact  -->
  <footer class="bg-info text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Copyright Rekayasa Perangkat Lunak SMA Serirama YLPI Riau 2024.</p>
          <a href="login.php">Login Admin</a>
        </div>

      </div>
    </div>
  </footer>

</body>

</html>

<script type="module">
  import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    speed: 1000,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',

    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>