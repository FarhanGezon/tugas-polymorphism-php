<?php

class Hewan {
    public function suara() {
        echo "Hewan mengeluarkan suara";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong"; 
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Guk Guk"; 
    }
}

$kucing = new Kucing(); 
$anjing = new Anjing(); 

$kucing->suara(); 
echo "<br>";
$anjing->suara(); 

?>