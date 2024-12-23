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
$pembelian1 = [
    ["nama" => "Pepsodent", "jumlah" => 27],
    ["nama" => "Rinso", "jumlah" => 15],
    ["nama" => "Downy", "jumlah" => 5],
];

$pembelian2 = [
    ["nama" => "Dove", "jumlah" => 20],
    ["nama" => "Le Mineral", "jumlah" => 22]
];

// Menghitung total pembelian
function calculateTotal($pembelian, $barang) {
    $total = 0;
    $total_jumlah_barang = 0;

    foreach ($pembelian as $item) {
        foreach ($barang as $produk) {
            if ($produk["nama"] === $item["nama"]) {
                $subtotal = $produk["harga"] * $item["jumlah"];
                $total += $subtotal;
                $total_jumlah_barang += $item["jumlah"];
            }
        }
    }

    return [$total, $total_jumlah_barang];
}

// Diskon dan total pembayaran
function calculateDiscountAndTotal($total) {
    $diskon = 0;
    if ($total >= 350000) {
        $diskon = 0.25 * $total;
    } elseif ($total >= 250000) {
        $diskon = 0.20 * $total;
    }
    $total_pembayaran = $total - $diskon;
    return [$diskon, $total_pembayaran];
}
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

<!-- Tabel Struk Belanja 1 -->
<h4>Struk Pembelian 1</h4>
<table>
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Subtotal (Rp)</th>
    </tr>
    <?php
    list($total1, $total_jumlah_barang1) = calculateTotal($pembelian1, $barang);
    foreach ($pembelian1 as $item) {
        foreach ($barang as $produk) {
            if ($produk["nama"] === $item["nama"]) {
                $subtotal = $produk["harga"] * $item["jumlah"];
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
        <td colspan="2" class="amount"><?php echo $total_jumlah_barang1; ?></td>
    </tr>
    <tr>
        <td class="label">Total Harga</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total1, 0, ',', '.'); ?></td>
    </tr>
    <?php
    list($diskon1, $total_pembayaran1) = calculateDiscountAndTotal($total1);
    ?>
    <tr>
        <td class="label">Diskon</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($diskon1, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td class="label">Total Pembayaran</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total_pembayaran1, 0, ',', '.'); ?></td>
    </tr>
</table>

<!-- Tabel Struk Belanja 2 -->
<h4>Struk Pembelian 2</h4>
<table>
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Subtotal (Rp)</th>
    </tr>
    <?php
    list($total2, $total_jumlah_barang2) = calculateTotal($pembelian2, $barang);
    foreach ($pembelian2 as $item) {
        foreach ($barang as $produk) {
            if ($produk["nama"] === $item["nama"]) {
                $subtotal = $produk["harga"] * $item["jumlah"];
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
        <td colspan="2" class="amount"><?php echo $total_jumlah_barang2; ?></td>
    </tr>
    <tr>
        <td class="label">Total Harga</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total2, 0, ',', '.'); ?></td>
    </tr>
    <?php
    list($diskon2, $total_pembayaran2) = calculateDiscountAndTotal($total2);
    ?>
    <tr>
        <td class="label">Diskon</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($diskon2, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td class="label">Total Pembayaran</td>
        <td colspan="2" class="amount"><?php echo "Rp " . number_format($total_pembayaran2, 0, ',', '.'); ?></td>
    </tr>
</table>

</body>
</html>
