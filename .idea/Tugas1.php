<?php

function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


for ($i = 1; $i <= 20; $i++) {
    echo "Angka $i adalah bilangan ";


    if ($i % 2 == 0) {
        echo "genap";
    } else {
        echo "ganjil";
    }


    if (is_prime($i)) {
        echo " dan sekaligus bilangan prima";
    }

    echo "<br>";
}
?>