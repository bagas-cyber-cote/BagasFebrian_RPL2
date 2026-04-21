<?php

// ===== FOREACH LOOP =====
echo "===== FOREACH LOOP =====\n";
echo "Iterasi Array dengan Mudah\n";
echo "==========================\n\n";

// Contoh 1: Foreach dengan Array Sederhana
echo "Contoh 1: Foreach Array Sederhana\n";
echo "-------------------------------\n";
$buah = ["Apel", "Mangga", "Jeruk", "Pisang"];

foreach ($buah as $item) {
    echo "Buah: $item\n";
}

echo "\n";

// Contoh 2: Foreach dengan Index (Key)
echo "Contoh 2: Foreach dengan Index/Key\n";
echo "----------------------------------\n";
$warna = ["Merah", "Hijau", "Biru"];

foreach ($warna as $index => $nilai) {
    echo "Indeks $index: $nilai\n";
}

echo "\n";

// Contoh 3: Foreach dengan Associative Array
echo "Contoh 3: Foreach Associative Array\n";
echo "---------------------------------\n";
$siswa = [
    "Nama" => "Bagas",
    "Kelas" => "12 RPL",
    "Nilai" => 85
];

foreach ($siswa as $kunci => $nilai) {
    echo "$kunci: $nilai\n";
}

echo "\n";

// Contoh 4: Foreach dengan Array of Objects/Multiple Data
echo "Contoh 4: Foreach Array Kompleks\n";
echo "-------------------------------\n";
$produk = [
    ["nama" => "Laptop", "harga" => 10000000],
    ["nama" => "Mouse", "harga" => 200000],
    ["nama" => "Keyboard", "harga" => 500000]
];

foreach ($produk as $item) {
    echo "Produk: " . $item["nama"] . " - Harga: Rp " . number_format($item["harga"], 0, ",", ".") . "\n";
}

echo "\n";

// Contoh 5: Foreach dengan Kondisi
echo "Contoh 5: Foreach dengan Kondisi\n";
echo "------------------------------\n";
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($angka as $num) {
    if ($num % 2 == 0) {
        echo "Angka genap: $num\n";
    }
}

echo "\n";

// Contoh 6: Foreach dengan Break dan Continue
echo "Contoh 6: Foreach dengan Break/Continue\n";
echo "--------------------------------------\n";
$daftar = ["A", "B", "C", "D", "E"];

foreach ($daftar as $huruf) {
    if ($huruf == "B") {
        echo "Skip huruf B\n";
        continue;
    }
    if ($huruf == "D") {
        echo "Berhenti di huruf D\n";
        break;
    }
    echo "Huruf: $huruf\n";
}

echo "\n";

// Contoh 7: Foreach dengan Reference (Modifikasi Array)
echo "Contoh 7: Foreach dengan Reference\n";
echo "--------------------------------\n";
$nilai = [10, 20, 30];
echo "Sebelum: " . implode(", ", $nilai) . "\n";

foreach ($nilai as &$val) {
    $val = $val * 2; // Kalikan dengan 2
}
unset($val); // Hapus reference

echo "Sesudah: " . implode(", ", $nilai) . "\n";

echo "\n";

// Contoh 8: Foreach dengan Nested Array
echo "Contoh 8: Foreach Nested Array (Untuk Loop Ganda)\n";
echo "---------------------------------------------\n";
$data = [
    ["A", "B", "C"],
    ["D", "E", "F"],
    ["G", "H", "I"]
];

foreach ($data as $baris) {
    echo "Baris: ";
    foreach ($baris as $kolom) {
        echo "$kolom ";
    }
    echo "\n";
}

?>
