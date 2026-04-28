<?php

// ===== CONTOH BREAK =====
echo "===== CONTOH BREAK =====\n";
echo "Break untuk menghentikan loop\n";
echo "==============================\n\n";

// Contoh 1: Break pada For Loop
echo "Contoh 1: Break pada For Loop\n";
echo "-----------------------------\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Berhenti pada angka 5!\n";
        break;
    }
    echo "Angka: $i\n";
}

echo "\n";

// Contoh 2: Break pada While Loop
echo "Contoh 2: Break pada While Loop\n";
echo "-------------------------------\n";
$num = 1;
while (true) {
    if ($num > 3) {
        echo "Keluar dari loop!\n";
        break;
    }
    echo "Nomor: $num\n";
    $num++;
}

echo "\n\n";

// ===== CONTOH CONTINUE =====
echo "===== CONTOH CONTINUE =====\n";
echo "Continue untuk skip iterasi\n";
echo "============================\n\n";

// Contoh 3: Continue pada For Loop (skip angka genap)
echo "Contoh 3: Continue - Hanya tampilkan angka ganjil\n";
echo "-----------------------------------------------\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Skip angka genap
    }
    echo "Angka ganjil: $i\n";
}

echo "\n";

// Contoh 4: Continue pada While Loop
echo "Contoh 4: Continue - Skip jika nilai = 3\n";
echo "---------------------------------------\n";
$x = 0;
while ($x < 6) {
    $x++;
    if ($x == 3) {
        echo "Skip angka 3\n";
        continue;
    }
    echo "Nilai: $x\n";
}

echo "\n";

// Contoh 5: Break dan Continue Kombinasi
echo "Contoh 5: Break dan Continue Kombinasi\n";
echo "------------------------------------\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        echo "Skip angka 3\n";
        continue; // Skip ke iterasi berikutnya
    }
    if ($i == 7) {
        echo "Berhenti pada angka 7!\n";
        break; // Keluar dari loop
    }
    echo "Proses angka: $i\n";
}

echo "\n";

// Contoh 6: Break dan Continue dengan Nested Loop
echo "Contoh 6: Break/Continue di Nested Loop\n";
echo "--------------------------------------\n";
for ($i = 1; $i <= 3; $i++) {
    echo "Baris $i: ";
    for ($j = 1; $j <= 5; $j++) {
        if ($j == 2) {
            continue; // Skip kolom 2
        }
        if ($j == 4) {
            break; // Keluar inner loop
        }
        echo "$j ";
    }
    echo "\n";
}

?>
