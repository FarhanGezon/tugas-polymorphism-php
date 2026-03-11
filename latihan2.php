<?php

// 1. Membuat Interface
interface Notifikasi {
    public function kirim();
}

// 2. Email
class Email implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email <br>";
    }
}

// 3. SMS
class SMS implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS <br>";
    }
}

// 4. WhatsApp
class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }
}

$pesanEmail = new Email();
$pesanSMS = new SMS();
$pesanWA = new WhatsApp();

$pesanEmail->kirim();
$pesanSMS->kirim();
$pesanWA->kirim();


?>
