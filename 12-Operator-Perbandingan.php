<?php

$var1 = 10;
$var2 = "10";
$var3 = 20;

var_dump($var1 == $var2); // membandingkan nilai saja
var_dump($var1 === $var2); // membandingkan nilai dan tipe data
var_dump($var1 != $var3); // apakah nilai var1 tidak sama dengan var3 /true
var_dump($var1 < $var3); // apakah nilai var1 lebih kecil dari var3 /true