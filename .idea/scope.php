<?php

$GLOBALS['varGlobal'] = 18;

function testVar()
{
    $varLokal = 1;
    echo "<p> test variabel didalam function.<p/>";
    //mengakses variabel global didalam function
    echo "variabel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "varabel lokal : $varLokal ";
    echo "<br>";
}

testVar();

    echo "<p> test variabel didalam function.<p/>";
    echo "variabel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    //mengakses variabel lokal di dalam function
    echo "varabel lokal : $varLokal ";
    echo "<br>";

?>
