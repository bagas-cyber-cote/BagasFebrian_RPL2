<?php

function tambah($a, $b) {
    return $a + $b;
}
function kurang($a, $b) {
    return $a - $b;
}
function kali($a, $b) {
    return $a * $b;
}
function bagi($a, $b) {
    if ($b == 0) {
        return "Error: bosque Division by zero";
    }
    return $a / $b;
}  
function pangkat($a, $b) {
    return pow($a, $b);
}

?>