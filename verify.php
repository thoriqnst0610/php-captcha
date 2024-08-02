<?php
session_start();
require 'vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

// Ambil input dari formulir
$username = $_POST['username'];
$password = $_POST['password'];
$userCaptcha = $_POST['captcha'];

// Debugging output
echo "Frasa CAPTCHA yang diharapkan: " . $_SESSION['phrase'] . "<br>";
echo "Input CAPTCHA pengguna: " . htmlspecialchars($userCaptcha) . "<br>";

// Validasi CAPTCHA
$builder = new CaptchaBuilder;
$builder->build();
$phrase = $_SESSION['phrase'];

// Debugging: periksa frasa yang disimpan di sesi
echo "Frasa CAPTCHA dari sesi: " . $_SESSION['phrase'] . "<br>";

// Uji frasa CAPTCHA
if (strcasecmp($phrase, $userCaptcha) === 0) {  // Menggunakan strcasecmp untuk perbandingan tidak sensitif huruf kapital
    // CAPTCHA valid
    if ($username == 'admin' && $password == 'password') {
        echo 'Login berhasil!';
        // Redirect atau proses lebih lanjut
    } else {
        echo 'Username atau password salah.';
    }
} else {
    // CAPTCHA tidak valid
    echo 'CAPTCHA tidak valid. Silakan coba lagi.';
}
?>
