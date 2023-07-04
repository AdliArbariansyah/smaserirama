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

  <title>Adli Arbariansyah</title>
  <link rel="icon" href="src/img/Foto Adli Arbariansyah, S.T.jpg">
</head>

<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info mb-3 margin-navbar">
    <div class="container">
      <marquee width="15%" direction="left"><a class="navbar-brand" href="index.html">ADLI ARBARIANSYAH</a></marquee>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav " aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
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
      <img src="src/img/Adli Arbariansyah,S.T.png" width="25%" class="rounded-circle img-thumbnail"> <!-- class="rounded-circle" cara Membuat foto bulat -->
      <h1 class="display-4 font-h1" style="font-weight: bold">ADLI ARBARIANSYAH, S.T</h1>
      <p class="lead">Junior Graphic Designer</p>
    </div>
  </div>
  <!-- end jumbotron -->

  <!-- section about -->
  <section id="about" class="about">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h1 class="profile-h1">PROFILE</h1>
          <div class="line"></div>
        </div>
      </div>
      <div class="row justify-content-center mb-5">

        <div class="col-md-4 about-img">
          <div class="about-img-wrapper">
            <img src="src/img/About_Adli Arbariansyah.jpg" alt="">
          </div>
        </div>

        <div class="col-md-4 about-info">
          <ul type="circle" class="theme-list col-mb-12">
            <li>
              <b>Nama</b>
              : Adli Arbariansyah
            </li>
            <li>
              <b>TTL</b>
              : Pekanbaru, 20 September 2001
            </li>
            <li>
              <b> Keahlian</b>
              : Desain Grafis, Web Design, Miscrosoft Office
            </li>
            <li>
              <b>Umur</b>
              <?php
              $tahun_lahir = 2001;
              $tahun_sekarang = date('Y');

              $umur = $tahun_sekarang - $tahun_lahir;
              ?>
              : <?php echo "$umur Tahun" ?>
            </li>
            <li>
              <b>Jenis Kelamin: </b>
              Laki Laki
            </li>
          </ul>
        </div>

        <div class="col-md-4 text-justify about-responsive">
          <h1 class="about-h1">ABOUT ME</h1>
          <div class="line"></div>
          <p>Nama Lengkap Saya Adli Arbariansyah Lahir di pekanbaru tanggal 20 September 2001, saya lulusan Teknik Informatika Universitas Islam Riau.<br>
            Saya Mempunyai Keahlian di bidang Desain Grafis, dengan menguasai software yaitu Adobe Photoshop. Berpengalaman dalam pembuatan berbagai desain,
            Kelola Akun Sosial Media.
          </p>
          <a href="src/img/Adli Arbariansyah_CV.jpg" type="button" class="btn btn-info" style="font-weight: bold; font-style:italic; font-size: 15px; margin-bottom: 5px;">Download CV</a>
        </div>

      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- soft skill and hard skill -->

  <section id="skill" class="skill mb-5 mt-2">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h1 class="skill-h1"> HARD SKILL & SOFT SKILL</h1>
          <div class="line"></div>
        </div>
      </div>

      <div class="row justify-content-around">
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">

              <div class="skill-h3 text-center">
                <h3>Hard Skill</h3>
              </div>

              <div class="skill-body">
                <p>Photoshop</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%
                </div>
              </div>

              <div class="skill-body">
                <p>PHP</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                </div>
              </div>

              <div class="skill-body">
                <p>HTML & CSS</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%
                </div>
              </div>

              <div class="skill-body">
                <p>Microsoft Word</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%
                </div>
              </div>

              <div class="skill-body">
                <p>Microsoft Excel</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                </div>
              </div>

              <div class="skill-body">
                <p>Microsoft Power Point</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="skill-h3 text-center">
                <h3>Soft Skill</h3>
              </div>

              <div class="skill-body">
                <p>Kreatifitas</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%
                </div>
              </div>

              <div class="skill-body">
                <p>Komunikatif</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%
                </div>
              </div>

              <div class="skill-body">
                <p>Kepemimpinan</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">87%
                </div>
              </div>

              <div class="skill-body">
                <p>Displin</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%
                </div>
              </div>

              <div class="skill-body">
                <p>Kerjasama Tim</p>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end soft skill and hard skill -->
  <!-- Education Service -->
  <section id="education" class="education mb-5 mt-2">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h1 class="education-h1"> EDUCATION</h1>
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
                  <img src="src/img/TUT WURI HANDAYANI.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title"> SD NEGERI 003 SUNGAI GANTANG</p>
                <p class="p-swiper1 "> 2007 - 2013</p>
              </div>
              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/TUT WURI HANDAYANI.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title"> MTS NURUL ULUM KEMPAS JAYA</p>
                <p class="p-swiper1"> 2013 - 2016</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/TUT WURI HANDAYANI.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-sma"> SMA NEGERI DHARMA PENDIDIKAN KEMPAS JAYA</p>
                <p class="p-swiper1 p-swiper1-description"> 2016 - 2019 | Jurusan Ilmu Pengetahuan Sosial</p>
              </div>
              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/LOGO UIR.png" width="200px" height="230px" class="gambar-swiper-uir">
                </div>
                <p class="p-swiper p-swiper-title"> UNIVERSITAS ISLAM RIAU</p>
                <p class="p-swiper1 p-swiper1-description"> 2019 - Sekarang | Jurusan Teknik Informatika</p>
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

  <!-- Organizational Experience -->
  <section id="organizational" class="organizational mb-5 mt-2">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h1 class="organizational-h1"> ORGANIZATIONAL EXPERIENCE</h1>
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
                  <img src="src/img/Logo Ambalan.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-verylong"> GERAKAN PRAMUKA 19.005 SMAN DHARMA PENDIDIKAN KEMPAS JAYA</p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>KETUA AMBALAN </i>| 2018</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/IPMPK.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> IKATAN PELAJAR MAHASISWA PEMUDA KEMPAS </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>KETUA UMUM </i>| 2022 - 2024</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/Logo DKR.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> DEWAN KERJA RANTING 040219 GERAKAN PRAMUKA KEMPAS </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>KABID EVALUASI DAN PENGEMBANGAN </i>| 2019 - 2024</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/Logo UKM Pramuka.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> GERAKAN PRAMUKA UNIVERSITAS ISLAM RIAU </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>ANGGOTA </i>| 2019</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/HIMASUGA.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> HIMPUNAN MAHASISWA DESA SUNGAI GANTANG </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>KETUA UMUM </i>| 2021 - 2022</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/Hipmapas Logo.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> HIMPUNAN PELAJAR MAHASISWA PEMUDA KEMPAS PEKANBARU</p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>BIDANG HID </i>| 2022 - 2024</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/KNPI.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-long"> PENGURUS KECAMATAN KNPI KEMPAS </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>SEKRETARIS </i>| 2022 - 2025</p>
              </div>

              <div class="swiper-slide">
                <div class="col-md-0">
                  <img src="src/img/logo Hippmih.png" width="200px" height="200px" class="gambar-swiper">
                </div>
                <p class="p-swiper p-swiper-title-verylong"> PB HIMPUNAN PEMUDA PELAJAR MAHASISWA INDRAGIRI HILIR PEKANBARU </p>
                <p class="p-swiper1 p-swiper1-description-long"> <i>KEPALA BIDANG HID </i>| 2022 - 2024</p>
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
  <!-- end Organizational Experience -->
  <!-- Services  -->

  <section id="service" class="service">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h1 class="service-h1"> SERVICE</h1>
          <div class="line"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="service-box">
            <div class="service-icon">
              <span class="ico-circle">
                <i><a href="https://www.instagram.com/sahabatdesain_digital"><img src="src/img/Logo sahabatdesain_digital.png" class="img-service"></a>
                </i>
              </span>
            </div>
            <div class="card-body" style="margin-bottom:-60px">
              <h5 class="card-title">Graphic Design</h5>
              <p style="font-style: italic;"> Sahabat Desain Digital</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="service-box">
            <div class="service-icon">
              <span class="ico-circle">
                <i><a href="https://www.instagram.com/sahabatkode"><img src="src/img/Logo Terbaru Sahabat Kode.png" class="img-service-1"></a>
                </i>
              </span>
            </div>
            <div class="card-body" style="margin-bottom:-60px">
              <h5 class="card-title">Web Design</h5>
              <p style="font-style: italic;">Sahabat Kode</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- end services -->

  <!-- section portfolio -->
  <section id="portfolio" class="portfolio pb-4 mt-5">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h1 class="portfolio-h1">PORTFOLIO</h1>
          <div class="line"></div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="src/img/1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Sertifikat Kompetensi Visualisasi Data Bersama Dicoding.</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="src/img/2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Sertifikat Kompetensi Belajar Dasar Pemograman Web Bersama Dicoding.</p>
            </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="col text-center">
          <a href="portofolio.php" style="font-weight: bold; font-style:italic" class="btn btn-info" type="button"> View All Portfolio >> </a>
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
                <a href="https://www.facebook.com/Adli.Arbariansyah" target="blank" class="medsos"><img src="src/img/facebook.png" width=50px;></a>

                <a href="https://www.instagram.com/arbariansyah" target="blank" class="medsos"><img src="src/img/Instagram.png" width=50px;></a>

                <a href="https://api.whatsapp.com/send?phone=6282385789768&text=Hallo,%20Assalamualaikum%20" target="blank" class="medsos"><img src="src/img/WA.png" width=50px;></a>

              </div>

            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item">
              <h1 class="location-h1">Location</h1>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Sungai Gantang,Kecamatan Kempas,Kabupaten Indragiri Hilir</li>
            <li class="list-group-item">Riau,Indonesia</li>
          </ul>
        </div>


        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Adli Arbariansyah">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="@arbariansyah20@gmail.com">
            </div>

            <div class="form-group">
              <label for="notelp">No.Telp</label>
              <input type="text" name="notelp" class="form-control" id="notelp" placeholder="082385789768">
            </div>

            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <button type="button" class="btn btn-info">Kirim Pesan</button>

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
          <p>Copyright Adli Arbariansyah 2022.</p>
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