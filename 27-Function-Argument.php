<?php

// membuat fungsi 
// berikan sebuah argument/parameter nilai
// lalu check kelulusan sesuai dengan standar nilai yaitu 75
function checkStatusKelulusan($grade){
    if ($grade > 75) {
        echo "anda lulus";
    }else{
        echo "anda tidak lulus";
    }
}
// memanggil fungsi
checkStatusKelulusan(60);

// tugas : buat jika fungsi mengirim parameter A,B,C,D,F