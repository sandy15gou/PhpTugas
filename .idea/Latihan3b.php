<?php

echo "=== Contoh isset() ===<br>";

$var1 = "Hello";
$var2 = null;

echo "Apakah \$var1 isset? " . (isset($var1) ? 'True' : 'False') . "<br>";
echo "Apakah \$var2 isset? " . (isset($var2) ? 'True' : 'False') . "<br>";


echo "<br>=== Contoh empty() ===<br>";

$var3 = "";
$var4 = 0;
$var5 = "Hello";

echo "Apakah \$var3 empty? " . (empty($var3) ? 'True' : 'False') . "<br>";
echo "Apakah \$var4 empty? " . (empty($var4) ? 'True' : 'False') . "<br>";
echo "Apakah \$var5 empty? " . (empty($var5) ? 'True' : 'False') . "<br>";
?>
