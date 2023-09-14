<?php
include "koneksi.php";


$id= $_GET['id'];
$sql= "DELETE FROM disposisi_surat WHERE id= $id";
$query= mysqli_query($conn, $sql);
var_dump($sql);

if ($query) {
    header('location: index.php');
}