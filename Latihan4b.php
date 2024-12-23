<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>

<?php
$negaraAsean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
echo "<h2>Daftar Negara ASEAN awal:</h2>";
echo "<ul>";
foreach ($negaraAsean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
$negaraAsean[] = "Laos";
$negaraAsean[] = "Filipina";
$negaraAsean[] = "Myanmar";
echo "<h2>Daftar Negara ASEAN baru:</h2>";
echo "<ul>";
foreach ($negaraAsean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>