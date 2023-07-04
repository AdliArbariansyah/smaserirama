<?php
require 'functions.php';
?>
<?php
if (isset($_POST['submit'])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'add_portofolio.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'add_portofolio.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/Logo AIS.png" type="image/icon" />
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="assets/css/styleberanda.css"> -->
    <link href="style.css" rel="stylesheet" />

    <title>Tambah Data</title>
</head>

<body>



    <div class="card mt-3 card-responsive mb-5" style="width: 40rem; margin:auto; color:aliceblue">
        <div class="card-header bg-secondary">
            <h2>Tambah Portofolio</h2>
        </div>
        <div class="card-body" style="color: black;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control form-rounded" id="keterangab" required>
                </div>

                <div class="form-group">
                    <label for="gambar">Upload File</label>
                    <input type="file" name="gambar" class="form-control form-rounded" id="gambar" required>
                </div>


                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn_style btn-primary add_style" value="Simpan Data" id="submit">
                </div>

            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>