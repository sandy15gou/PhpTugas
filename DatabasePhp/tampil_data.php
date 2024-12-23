<?php
// Include file koneksi
include 'koneksi.php';

// Ambil semua data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dan data ada
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Daftar Mahasiswa</h2>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Jurusan</th><th>Minat</th><th>Gambar</th></tr>";

        // Loop untuk menampilkan data
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['Alamat'] . "</td>"; // Pastikan nama kolom ini benar
            echo "<td>" . $data['JK'] . "</td>";
            echo "<td>" . $data['tgl_lahir'] . "</td>";
            echo "<td>" . $data['jurusan'] . "</td>";
            echo "<td>" . $data['minat'] . "</td>";
            echo "<td><img src='" . $data['gambar'] . "' alt='Gambar Mahasiswa' width='100'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data mahasiswa.";
    }
} else {
    // Menampilkan error jika query gagal
    echo "Query gagal: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
