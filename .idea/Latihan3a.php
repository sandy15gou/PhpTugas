<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and External CSS Example</title>
    <link rel="stylesheet" href="Latihan3aCSS.css">
</head>
<body>

<?php
function ganti_style($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

$tulisan = "Hello World! Here I Come!";
$kelas = "ganti-style";
echo ganti_style($tulisan, $kelas);
?>

</body>
</html>
