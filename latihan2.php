<?php

// 1. Membuat Interface
interface Notifikasi {
    // Menentukan method yang wajib ada di class implementasi
    public function kirim();
}

// 2. Membuat Implementasi Class: Email
class Email implements Notifikasi {
    // Wajib memiliki method kirim()
    public function kirim() {
        echo "Notifikasi dikirim melalui Email <br>";
    }
}

// 3. Membuat Implementasi Class: SMS
class SMS implements Notifikasi {
    // Wajib memiliki method kirim()
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS <br>";
    }
}

// 4. Membuat Implementasi Class: WhatsApp
class WhatsApp implements Notifikasi {
    // Wajib memiliki method kirim()
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }
}

// --- Menampilkan Output (Sesuai Permintaan Soal) ---

$pesanEmail = new Email();
$pesanSMS = new SMS();
$pesanWA = new WhatsApp();

$pesanEmail->kirim();
$pesanSMS->kirim();
$pesanWA->kirim();

?>