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
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/7/76/Alexander_Graham_Bell.jpg"
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
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/e/e8/James_Watt_by_Carl_Koerner.jpg"
    ],
    [
        "nama" => "Marie Curie",
        "penemuan" => "Radioaktivitas",
        "tahun" => 1898,
        "negara" => "Polandia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/6/6d/Marie_Curie_c1920.jpg"
    ],
    [
        "nama" => "Guglielmo Marconi",
        "penemuan" => "Radio",
        "tahun" => 1895,
        "negara" => "Italia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/5e/Guglielmo_Marconi.jpg"
    ],
    [
        "nama" => "Wright Bersaudara",
        "penemuan" => "Pesawat Terbang",
        "tahun" => 1903,
        "negara" => "Amerika Serikat",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/7/7d/Wright_Brothers.jpg"
    ],
    [
        "nama" => "Michael Faraday",
        "penemuan" => "Elektromagnetisme",
        "tahun" => 1831,
        "negara" => "Inggris",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/5f/M_Faraday_Th_Phillips_oil_1842.jpg"
    ],
    [
        "nama" => "Alexander Fleming",
        "penemuan" => "Penisilin",
        "tahun" => 1928,
        "negara" => "Skotlandia",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/8/8d/Alexander_Fleming_3.jpg"
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
