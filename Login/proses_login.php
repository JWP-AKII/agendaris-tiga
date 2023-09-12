<?php
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$data = mysqli_query($conn, $sql);

$result = mysqli_num_rows($data);

// var_dump($result);

if ($result == 1) {
    // echo "Anda Berhasil Login";
    $_SESSION['username'] = $username;
    header('location:index.php');
}else {
    echo "Username dan Password Salah";
}