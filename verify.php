<?php
session_start();


// Ambil input dari formulir
$username = $_POST['username'];
$password = $_POST['password'];
$userCaptcha = $_POST['captcha'];

if($_SESSION['captcha'] == strtolower($userCaptcha)){
    echo "</h1>username : ".$username;
    echo"<br>";
    echo "password: ".$password;
    echo "<br>";
    echo "captcha : ".$userCaptcha;
}else{
    echo "Tidak Valid";
}

?>
