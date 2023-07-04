<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "db_adliarbariansyah";

$koneksi = mysqli_connect($hostname, $user, $password, $database);

if (!$koneksi) {
    echo  "Connection Failed";
}
