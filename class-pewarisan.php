<?php
// Parent class
class Anomali {
    protected $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function skill() {
        return "Skill: Mengubah bentuk";
    }

    public function getNama() {
        return $this->nama;
    }

    public function info() {
        return "Nama: " . $this->nama . ", " . $this->skill();
    }
}

// Child class (pewarisan dari Anomali)
class AnomaliAir extends Anomali {
    private $jenisAir;

    public function __construct(string $nama, string $jenisAir) {
        parent::__construct($nama); // Memanggil konstruktor parent
        $this->jenisAir = $jenisAir;
    }

    // Override method skill
    public function skill() {
        return "Skill: Mengendalikan air";
    }

    public function getJenisAir() {
        return $this->jenisAir;
    }

    public function info() {
        return "Nama: " . $this->nama . ", Jenis Air: " . $this->jenisAir . ", " . $this->skill();
    }
}

// Child class lain
class AnomaliApi extends Anomali {
    private $suhu;

    public function __construct(string $nama, int $suhu) {
        parent::__construct($nama);
        $this->suhu = $suhu;
    }

    public function skill() {
        return "Skill: Mengendalikan api";
    }

    public function getSuhu() {
        return $this->suhu;
    }

    public function info() {
        return "Nama: " . $this->nama . ", Suhu: " . $this->suhu . "°C, " . $this->skill();
    }
}

// Contoh penggunaan
echo "=== Pewarisan (Inheritance) dalam PHP ===\n\n";

// Membuat objek dari parent class
$anomali1 = new Anomali("Anomali Dasar");
echo $anomali1->info() . "\n\n";

// Membuat objek dari child class
$anomaliAir = new AnomaliAir("Poseidon", "Air Laut");
echo $anomaliAir->info() . "\n";
echo "Jenis Air: " . $anomaliAir->getJenisAir() . "\n\n";

// Membuat objek child class lain
$anomaliApi = new AnomaliApi("Vulcan", 500);
echo $anomaliApi->info() . "\n";
echo "Suhu: " . $anomaliApi->getSuhu() . "°C\n\n";

// Demonstrasi polimorfisme
echo "=== Polimorfisme ===\n";
$anomalis = [$anomali1, $anomaliAir, $anomaliApi];
foreach ($anomalis as $a) {
    echo $a->info() . "\n";
}