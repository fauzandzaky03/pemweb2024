<?php
$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "fauzandzaky24@gmail.com" && $password == "55555") {
    header("location:menu.php");
} else {
    echo "Email atau Password Tidak Valid";
}