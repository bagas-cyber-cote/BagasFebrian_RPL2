<?php

$name = ["bagas","dayat", "fida"];
$status = ["jomblo", "taken", "jomblo juga"];

$status[0] = "menikah"; 

$status[] = "belum menikah";

// var_dump($status);

// "bagas sekarang status masih jomblo"

// echo "$name[0] sekarang status masih $status[3]";
echo count($status);