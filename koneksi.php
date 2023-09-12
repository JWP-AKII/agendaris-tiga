<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_surat';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Koneski Gagal";
}
