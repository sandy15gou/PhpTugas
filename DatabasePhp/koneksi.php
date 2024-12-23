<?php
// Koneksi ke database
$host = "localhost";
$user = "root"; // Sesuaikan dengan username database Anda
$pass = ""; // Kosongkan jika tidak ada password
$db   = "dbakademik"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
