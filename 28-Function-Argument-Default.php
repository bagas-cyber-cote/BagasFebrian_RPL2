<?php

// membuat fungsi 
// berikan sebuah argument/parameter nilai
// lalu check kelulusan sesuai dengan standar nilai yaitu 75
function checkStatusKelulusan($grade = 0){
    if ($grade > 75) {
        echo "anda lulus";
    }else{
        echo "anda tidak lulus";
    }
}
// memanggil fungsi
checkStatusKelulusan(80);