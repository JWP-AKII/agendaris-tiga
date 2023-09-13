<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE id = $id";

$data = mysqli_query($conn, $sql);

if ($data == TRUE) {
    echo "DATA BERHASIL DIHAPUS";
    header('location:index.php');
}  else {
    echo "DATA GAGAL DIHAPUS";
}

?>