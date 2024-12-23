<?php
$pembelian = [
    ["nama" => "Pepsodent", "jumlah" => 27, "harga" => 11980],
    ["nama" => "Rinso", "jumlah" => 15, "harga" => 20769],
    ["nama" => "Downy", "jumlah" => 5, "harga" => 12389],
    ["nama" => "Dove", "jumlah" => 20, "harga" => 22688],
    ["nama" => "Le Mineral", "jumlah" => 22, "harga" => 5650]
];

$total = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px;
        }
        .title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .label {
            font-weight: bold;
        }
        .right {
            text-align: right;
        }
        .total {
            font-weight: bold;
            margin-top: 10px;
        }
        .line {
            border-bottom: 1px solid #000;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <p class="title">Struk Belanja</p>
    <p><span class="label">Tanggal Transaksi :</span> 30 Oktober 2024</p>

    <?php
    foreach ($pembelian as $item) {
        $subtotal = $item["harga"] * $item["jumlah"];
        $total += $subtotal;
        echo "<p><span class='label'>{$item['nama']} ({$item['jumlah']} x)</span> <span class='right'>Rp " . number_format($subtotal, 0, ',', '.') . "</span></p>";
    }
    ?>

    <p class="total">Total: <span class="right">Rp <?php echo number_format($total, 0, ',', '.'); ?></span></p>

    <?php
    $diskon = 0;
    if ($total >= 350000) {
        $diskon = 0.25 * $total;
    } elseif ($total >= 250000) {
        $diskon = 0.20 * $total;
    }

    $total_pembayaran = $total - $diskon;
    ?>
    <p>Diskon: <span class="right">Rp <?php echo number_format($diskon, 0, ',', '.'); ?></span></p>
    <p class="total">Total Pembayaran: <span class="right">Rp <?php echo number_format($total_pembayaran, 0, ',', '.'); ?></span></p>
</div>

</body>
</html>
