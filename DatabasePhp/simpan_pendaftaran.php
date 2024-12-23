<?php
include 'koneksi.php'; // Pastikan file koneksi sudah benar

// Validasi dan ambil data dari form
$nama          = isset($_POST['nama']) ? $_POST['nama'] : null;
$alamat        = isset($_POST['alamat']) ? $_POST['alamat'] : null;
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : null;
$tgl_lahir     = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null;
$jurusan       = isset($_POST['jurusan']) ? $_POST['jurusan'] : null;
$minat         = isset($_POST['minat']) ? implode(", ", $_POST['minat']) : ""; // Pastikan minat berupa array
$gambar        = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : null;
$tmp_file      = isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : null;

// Lokasi folder untuk menyimpan gambar
$folder_gambar = "uploads/";
$path_gambar   = $folder_gambar . $gambar;

// Cek apakah semua data tersedia
if ($nama && $alamat && $jenis_kelamin && $tgl_lahir && $jurusan) {
    if ($gambar && move_uploaded_file($tmp_file, $path_gambar)) {
        // Query untuk menyimpan data ke database
        $query = "INSERT INTO tb_mahasiswa (nama, Alamat, JK, tgl_lahir, jurusan, minat, gambar) 
                  VALUES ('$nama', '$alamat', '$jenis_kelamin', '$tgl_lahir', '$jurusan', '$minat', '$gambar')";

        // Eksekusi query
        if (mysqli_query($koneksi, $query)) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
} else {
    echo "Mohon isi semua field yang diperlukan.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
