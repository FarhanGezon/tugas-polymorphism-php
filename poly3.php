<?php

abstract class Kendaraan {
    abstract public function berjalan(); 
}

class Mobil extends Kendaraan {
    public function berjalan() {
        echo "Mobil berjalan di jalan raya"; 
    }
}

class Kapal extends Kendaraan {
    public function berjalan() {
        echo "Kapal berlayar di laut";  
    }
}

$mobil = new Mobil(); 
$kapal = new Kapal(); 

$mobil->berjalan(); 
echo "<br>"; 
$kapal->berjalan(); 

?>