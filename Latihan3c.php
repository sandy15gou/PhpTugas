<?php
function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 0; $i < $pangkat; $i++) {
        $hasil *= $angka;
    }
    return $hasil;
}


$angka = 3;
$pangkat = 3;
$hasil = pangkat($angka, $pangkat);


echo "$angka pangkat $pangkat = $hasil";
?>
