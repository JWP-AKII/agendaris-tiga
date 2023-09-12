<?php
$localhost= 'localhost';
$username= 'root';
$password='';
$database= 'db_surat';

$conn= mysqli_connect($localhost, $username, $password, $database);
if (!$conn) {
    echo "gagal connect";
}
