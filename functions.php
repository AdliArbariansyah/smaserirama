 <?php

    // Koneksi database
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "db_adliarbariansyah";

    $koneksi = mysqli_connect($hostname, $user, $password, $database);
    if (!$koneksi) {
        echo  "Connection Failed";
    }

    function query($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows    = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }




    function tambah($data)
    {
        global $koneksi;


        $keterangan = htmlspecialchars($data["keterangan"]);
        // upload gambar 
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO portofolio VALUES ('', '$keterangan', '$gambar')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }


    function upload()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error      = $_FILES['gambar']['error'];
        $tmpName    = $_FILES['gambar']['tmp_name'];

        if ($error === 4) {
            echo "
                <script>
                    alert ('Pilih gambar terlebih dahulu!');
                </script>";
            return false;
        }

        // cek apakah gambar atau bukan

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
                <script>
                    alert ('Yang anda upload bukan gambar');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar

        if ($ukuranFile > 5000000) {
            echo "
                <script>
                    alert ('Ukuran Gambar terlalu Besar!');
                </script>";
            return false;
        }
        // generate name gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // lolos pengecekan gambar siap diupload
        move_uploaded_file($tmpName, 'src/img/' . $namaFileBaru);

        return $namaFileBaru;
    }
    ?>