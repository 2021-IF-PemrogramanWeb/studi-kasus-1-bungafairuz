<?php

$email = $_POST["email"];
$pass = $_POST["password"];

if($email === "bunga@cantik" && $pass == "12345"){
    echo "LOGIN BERHASIL";
}
else
    echo "email atau password salah";

?>

