<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $isi_pesan = $_POST['isi_pesan'];


    $sql = mysqli_query($koneksi, "INSERT INTO pesan (nama_lengkap,no_hp,isi_pesan) VALUES ('$nama_lengkap','$no_hp','$isi_pesan')");
    if ($sql > 0) {
        echo "
        <script>
            alert('Pesan Berhasil di Kirim!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Pesan Gagal Dikirim');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
