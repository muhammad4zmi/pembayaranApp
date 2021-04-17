<?php
session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);


if ($cek > 0) {
    $_SESSION['username'] = $username;
    // $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "login";
    $alert = "<div class='alert alert-success' role='alert'>
    Login Berhasil!
  </div>";
    $_SESSION['alert'] = $alert;
    header("Location:index.php");
} else {
    $alert = "<div class='alert alert-danger' role='alert'>
    Username atau Password Salah!
  </div>";
    $_SESSION['alert'] = $alert;
    header("Location:login.php");
}

