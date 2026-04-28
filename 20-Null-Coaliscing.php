<?php


$var1 = [
    "name" => "John",
    "age" => 20,
    "city" => "New York",
];

$var2 = $var1["name"] ?? "fulan";
echo $var2;