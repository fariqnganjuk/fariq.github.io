<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Setelah ini, Anda bisa menggunakan fungsi mail() atau pustaka PHPMailer
    // untuk mengirim email ke alamat yang dituju

    // Contoh menggunakan fungsi mail()
    $to = 'fariqnganjuk@gmail.com';
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\nMessage: $message";
    
    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan Anda telah berhasil terkirim.";
    } else {
        echo "Gagal mengirim pesan. Silakan coba lagi.";
    }
}
?>
