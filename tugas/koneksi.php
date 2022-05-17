<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";

// perintah php untuk akses ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Cek Koneksi
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>