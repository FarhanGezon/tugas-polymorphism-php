<?php

// Parent Class
class BangunDatar {
    public function hitungLuas() {
        return 0;
    }
}

// Child Class 1: Persegi
class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

// Child Class 2: Lingkaran
class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    // Overriding method hitungLuas()
    public function hitungLuas() {
        return pi() * $this->jariJari * $this->jariJari; 
    }
}

// Child Class 3: Segitiga
class Segitiga extends BangunDatar {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // Overriding 
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$persegi = new Persegi(5); 
echo "Luas Persegi: " . $persegi->hitungLuas() . "<br>";

$lingkaran = new Lingkaran(7); 
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "<br>";

$segitiga = new Segitiga(4, 6); 
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";


?>
