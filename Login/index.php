<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $_SESSION['username'] ?></h1>
    <p>Anda Berhasil Login</p>

    <a href="logout.php">Logout</a>
</body>
</html>