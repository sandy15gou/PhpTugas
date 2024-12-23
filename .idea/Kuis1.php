<?php

function calculateDiscount($jumlah) {
    $discount = 0;

    if ($jumlah >= 500000) {
        $discount = 50;
    } elseif ($jumlah >= 100000) {
        $discount = 10;
    } elseif ($jumlah >= 50000) {
        $discount = 5;
    }

    return $discount;
}


?>
