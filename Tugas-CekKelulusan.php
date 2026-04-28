<?php

function CekKelulusan($grade = 0) {
    if ($grade >= "A") {
        echo "Selamat, Anda Lulus dengan Nilai 80-100";
    } elseif ($grade >= "B") {
        echo "Selamat, Anda Lulus dengan Nilai 70-79";
    } elseif ($grade >= "C") {
        echo "Selamat, Anda Lulus dengan Nilai 60-69";
    } else {
        echo "Maaf, Anda Tidak Lulus dengan Nilai 0-59";
    }
}

CekKelulusan("A");