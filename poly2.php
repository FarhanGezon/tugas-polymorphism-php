<?php

interface Pembayaran {
    public function prosesPembayaran(); 
}

class TransferBank implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Transfer Bank"; 
    }
}

class EWallet implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui E-Wallet"; 
    }
}

class KartuKredit implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Kartu Kredit";  
    }
}

$p1 = new TransferBank(); 
$p2 = new EWallet(); 
$p3 = new KartuKredit(); 

$p1->prosesPembayaran(); 
echo "<br>"; 
$p2->prosesPembayaran(); 
echo "<br>"; 
$p3->prosesPembayaran(); 

?>