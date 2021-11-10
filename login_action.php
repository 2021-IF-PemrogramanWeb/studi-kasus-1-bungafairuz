<?php

session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

if($email === "bunga@cantik" && $pass == "12345"){
    $_SESSION["login"] = true;
    header("Location: dashboard.php");
    // echo "LOGIN BERHASIL";
}
else
    header("Location: index.php");
    echo "email atau password salah";
?>

