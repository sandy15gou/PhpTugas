<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penemu Terkenal</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Daftar Penemu Terkenal</h2>

<?php
$penemu = [
    [
        "nama" => "Thomas Edison",
        "penemuan" => "Lampu Pijar",
        "tahun" => 1879,
        "negara" => "Amerika Serikat",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/9/9d/Thomas_Edison2.jpg"
    ],
    [
        "nama" => "Alexander Graham Bell",
        "penemuan" => "Telepon",
        "tahun" => 1876,
        "negara" => "Skotlandia",
        "gambar" => "https://www.invent.org/sites/default/files/styles/fire_medium_x1_768px_/public/inductees/2024-10/Bell_Portrait%20as%20a%20younger%20man.jpg"
    ],
    [
        "nama" => "Nikola Tesla",
        "penemuan" => "Arus Bolak-Balik",
        "tahun" => 1888,
        "negara" => "Serbia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/d/d4/N.Tesla.JPG"
    ],
    [
        "nama" => "Albert Einstein",
        "penemuan" => "Teori Relativitas",
        "tahun" => 1905,
        "negara" => "Jerman",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/d/d3/Albert_Einstein_Head.jpg"
    ],
    [
        "nama" => "James Watt",
        "penemuan" => "Mesin Uap",
        "tahun" => 1769,
        "negara" => "Skotlandia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Watt_James_von_Breda.jpg/330px-Watt_James_von_Breda.jpg"
    ],
    [
        "nama" => "Marie Curie",
        "penemuan" => "Radioaktivitas",
        "tahun" => 1898,
        "negara" => "Polandia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Marie_Curie.jpg/330px-Marie_Curie.jpg"
    ],
    [
        "nama" => "Guglielmo Marconi",
        "penemuan" => "Radio",
        "tahun" => 1895,
        "negara" => "Italia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Guglielmo_Marconi.jpg/330px-Guglielmo_Marconi.jpg"
    ],
    [
        "nama" => "Wright Brother",
        "penemuan" => "Pesawat Terbang",
        "tahun" => 1903,
        "negara" => "Amerika Serikat",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Orville_Wright.jpg/218px-Orville_Wright.jpg"
    ],
    [
        "nama" => "Michael Faraday",
        "penemuan" => "Elektromagnetisme",
        "tahun" => 1831,
        "negara" => "Inggris",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/9/91/Faraday.jpg"
    ],
    [
        "nama" => "Alexander Fleming",
        "penemuan" => "Penisilin",
        "tahun" => 1928,
        "negara" => "Skotlandia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Synthetic_Production_of_Penicillin_TR1468.jpg/330px-Synthetic_Production_of_Penicillin_TR1468.jpg"
    ],
];

echo "<table>
        <tr>
            <th>Nama</th>
            <th>Penemuan</th>
            <th>Tahun</th>
            <th>Negara</th>
            <th>Gambar</th>
        </tr>";

foreach ($penemu as $p) {
    echo "<tr>
            <td>{$p['nama']}</td>
            <td>{$p['penemuan']}</td>
            <td>{$p['tahun']}</td>
            <td>{$p['negara']}</td>
            <td><img src='{$p['gambar']}' alt='{$p['nama']}'></td>
         </tr>";
}

echo "</table>";
?>

</body>
</html>
