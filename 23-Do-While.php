<?php

// Contoh 1: Do-While Loop Sederhana
echo "Contoh 1: Do-While Loop Sederhana\n";
echo "==================================\n";

$i = 1;
do {
    echo "Angka: $i\n";
    $i++;
} while ($i <= 5);

echo "\n";

// Contoh 2: Do-While dengan Kondisi Berbeda
echo "Contoh 2: Do-While dengan Pengurangan\n";
echo "=====================================\n";

$x = 5;
do {
    echo "Nilai x: $x\n";
    $x--;
} while ($x > 0);

echo "\n";

// Contoh 3: Do-While dengan Break
echo "Contoh 3: Do-While dengan Break\n";
echo "===============================\n";

$num = 1;
do {
    if ($num == 3) {
        echo "Berhenti di angka 3\n";
        break;
    }
    echo "Nomor: $num\n";
    $num++;
} while ($num <= 10);

echo "\n";

// Contoh 4: Do-While dengan String
echo "Contoh 4: Do-While dengan String\n";
echo "================================\n";

$items = ["Apel", "Mangga", "Jeruk"];
$count = 0;

do {
    echo "Item " . ($count + 1) . ": " . $items[$count] . "\n";
    $count++;
} while ($count < count($items));

?>
