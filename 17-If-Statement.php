<?php

// nilai untuk kondisi lulus
// $nilai = 80;
// $absen = 90;

// nilai untuk kondisi tidak lulus
$nilai = 70;
$absen = 70;
$remidial = false;

// untuk mengecek apakah belum lulus standar jika nilai dibawah 75 dan absen dibawah 80

if ($nilai > 75 && $absen > 80) {
    echo "kamu lulus ujian";
} else if ($remidial) {
    echo "kamu ikut remidial";
} else {
    echo "kamu tidak lulus ujian";
}