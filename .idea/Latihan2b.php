<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php

$baris = 5;


for ($i = 1; $i <= $baris; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>
