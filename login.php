<?php
session_start();

if (isset($_SESSION['username'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1>LOGIN</h1>
    <form action="proses_login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="Password">

    <button type="submit" name="login">Login</button>
    </form>
    </div>
</body>
</html>