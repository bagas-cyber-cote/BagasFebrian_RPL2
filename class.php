<?php
class Army{
    public string $nama;
    public string $tittles;
    public string $role;
    public string $address;
    public function sayHello(string $nama){
        echo "Hello, My name is $nama\nSaya memiliki gelar $this->tittles\nberperan sebagai $this->role\ndan terakhir Saya berasal dari $this->address\n";
    }

    public function __construct(){
        echo "Army Class is created \n";
    }

    public function __destruct(){
        echo "Army Class is destroyed \n";
    }
}

$Army1 = new Army();
$Army1->tittles = "commander lewndir hytam";
$Army1->role = "Panglima Jewmbud";
$Army1->address = "Bumi";
$Army1->sayHello("Ambatronuss");