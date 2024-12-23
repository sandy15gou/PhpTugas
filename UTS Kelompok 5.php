<?php
// Data barang dalam array multidimensi
$barang = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20769],
    ["nama" => "Downy", "stok" => 12, "harga" => 12389],
    ["nama" => "Le Mineral", "stok" => 25, "harga" => 5650]
];

// Pembelian dengan jumlah barang yang dibeli
$pembelian = [
    ["nama" => "Pepsodent", "jumlah" => 27],
    ["nama" => "Rinso", "jumlah" => 15],
    ["nama" => "Downy", "jumlah" => 5],
    ["nama" => "Dove", "jumlah" => 20],
    ["nama" => "Le Mineral", "jumlah" => 22]
];

// Menghitung total pembelian
$total = 0;
$total_jumlah_barang = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Belanja</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .label {
            font-weight: bold;
        }
        .amount {
            text-align: right;
        }
    </style>
</head>
<body>

<h3>Struk Belanja</h3>
<p>Tanggal Transaksi: 30 Oktober 2024</p>

<!-- Tabel Struk Belanja -->
<h4>Struk Pembelian</h4>
<table>
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Subtotal (Rp)</th>
    </tr>
    <?php
    foreach ($pembelian as $item) {
        foreach ($barang as $produk) {
            if ($produk["nama"] === $item["nama"]) {
                $subtotal = $produk["harga"] * $item["jumlah"];
                $total += $subtotal;
                $total_jumlah_barang += $item["jumlah"];
                echo "<tr>";
                echo "<td>{$item['nama']} ({$item['jumlah']} x)</td>";
                echo "<td class='amount'>{$item['jumlah']}</td>";
                echo "<td class='amount'>" . number_format($subtotal, 0, ',', '.') . "</td>";
                echo "</tr>";
            }
        }
    }
    ?>

    <tr>
        <td class="label">Total Jumlah Barang</td>
        <td colspan="2" class="amount"><?php echo $total_jumlah_barang; ?></td>
    </tr>
    <tr>
        <td class="label">Total Harga</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total, 0, ',', '.'); ?></td>
    </tr>
    <?php
    // Menghitung diskon
    $diskon = 0;
    if ($total >= 350000) {
        $diskon = 0.25 * $total;
    } elseif ($total >= 250000) {
        $diskon = 0.20 * $total;
    }

    $total_pembayaran = $total - $diskon;
    ?>
    <tr>
        <td class="label">Diskon</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($diskon, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td class="label">Total Pembayaran</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total_pembayaran, 0, ',', '.'); ?></td>
    </tr>
</table>

</body>
</html>
