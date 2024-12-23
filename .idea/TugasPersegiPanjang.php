<?php
$panjang = 10;
$lebar = 5;
function panjang($panjang, $lebar){
    return $panjang * $lebar;

}
function Lebar($panjang, $lebar){
    return 2 * ($panjang + $lebar);
}

echo "Hitung Luas Persegi Panjang:" .panjang($panjang, $lebar);
echo "<br>";
echo "Keliling Persegi Panjang: " . Lebar($panjang, $lebar);