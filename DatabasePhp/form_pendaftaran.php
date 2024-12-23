<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Formulir Pendaftaran</h2>
    <form action="simpan_pendaftaran.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" class="form-control" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" class="form-control" required>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>
                    <input type="checkbox" name="minat[]" value="Programming"> Programming
                    <input type="checkbox" name="minat[]" value="Animasi"> Animasi
                    <input type="checkbox" name="minat[]" value="Desain"> Desain
                </td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td><input type="file" name="gambar" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
