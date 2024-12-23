<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Price Table and Transaction</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php
    // Define the product data in an array
    $products = [
        ["ID" => 1, "name" => "Pepsodent", "stock" => 30, "price" => 11980],
        ["ID" => 2, "name" => "Sunlight", "stock" => 15, "price" => 12880],
        ["ID" => 3, "name" => "Baygon", "stock" => 10, "price" => 16779],
        ["ID" => 4, "name" => "Dove", "stock" => 20, "price" => 22688],
        ["ID" => 5, "name" => "Downy", "stock" => 20, "price" => 20769],
        ["ID" => 6, "name" => "Le Mineral", "stock" => 25, "price" => 5650],
    ];

    // Calculate total for each product and overall total
    $overallTotal = 0;
    foreach ($products as &$product) {
        $product['total'] = $product['stock'] * $product['price'];
        $overallTotal += $product['total'];

        // Display each product in a table row
        echo "<tr>
                <td>{$product['ID']}</td>
                <td>{$product['name']}</td>
                <td>{$product['stock']}</td>
                <td>Rp " . number_format($product['price'], 0, ',', '.') . "</td>
                <td>Rp " . number_format($product['total'], 0, ',', '.') . "</td>
              </tr>";
    }
    ?>

    <tr>
        <td colspan="4" style="text-align:right;"><strong>Total Keseluruhan</strong></td>
        <td><strong>Rp <?= number_format($overallTotal, 0, ',', '.') ?></strong></td>
    </tr>
</table>

<?php
// Sample transaction (product ID and quantity)
$transaction = [
    ["product_id" => 1, "quantity" => 27],
    ["product_id" => 3, "quantity" => 15],
    ["product_id" => 5, "quantity" => 5],
    ["product_id" => 4, "quantity" => 20],
    ["product_id" => 6, "quantity" => 22],
];

// Function to calculate transaction total
function calculateTransactionTotal($transaction, $products) {
    $transactionTotal = 0;
    foreach ($transaction as $item) {
        foreach ($products as $product) {
            if ($product['ID'] == $item['product_id']) {
                $transactionTotal += $item['quantity'] * $product['price'];
            }
        }
    }
    return $transactionTotal;
}

// Calculate transaction total
$transactionTotal = calculateTransactionTotal($transaction, $products);

// Function to calculate discount
function calculateDiscount($total) {
    if ($total >= 350000) {
        return 0.25 * $total; // 25% discount
    } elseif ($total >= 250000) {
        return 0.20 * $total; // 20% discount
    }
    return 0;
}

// Calculate discount for the transaction
$discount = calculateDiscount($transactionTotal);

// Calculate final payment after discount
$finalPayment = $transactionTotal - $discount;
?>

<h2>Transaksi</h2>
<table>
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Total</th>
    </tr>

    <?php
    // Display each transaction item
    foreach ($transaction as $item) {
        foreach ($products as $product) {
            if ($product['ID'] == $item['product_id']) {
                $itemTotal = $item['quantity'] * $product['price'];
                echo "<tr>
                        <td>{$product['name']}</td>
                        <td>{$item['quantity']}</td>
                        <td>Rp " . number_format($product['price'], 0, ',', '.') . "</td>
                        <td>Rp " . number_format($itemTotal, 0, ',', '.') . "</td>
                      </tr>";
            }
        }
    }
    ?>

    <tr>
        <td colspan="3" style="text-align:right;"><strong>Total</strong></td>
        <td><strong>Rp <?= number_format($transactionTotal, 0, ',', '.') ?></strong></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:right;">Diskon</td>
        <td>Rp <?= number_format($discount, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:right;"><strong>Total Pembayaran</strong></td>
        <td><strong>Rp <?= number_format($finalPayment, 0, ',', '.') ?></strong></td>
    </tr>
</table>

</body>
</html>
