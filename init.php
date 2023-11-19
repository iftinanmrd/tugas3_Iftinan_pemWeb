<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kelas_c";

$koneksi = mysqli_connect("localhost", "root", "", "db_kelas_c");

if($koneksi) {
    echo "Koneksi Berhasil"."<br>";
}else {
    echo "Koneksi Gagal"."<br>";
}
?>